<?php

namespace App\Http\Controllers;

use App\Models\ItemCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CartsController extends Controller
{
    public function AddtoCart(Request $req,$id){
        $res = Http::get('https://p01-product-api-production.up.railway.app/api/user/products');
        // $id_user = $req->id;
        $id_user = 2;
        $cart_item = new ItemCart();
        foreach($res['data'] as $prd){
            if($prd['sub_products'] != null){
                foreach($prd['sub_products'] as $item){
                    if($item['id'] == $id){
                        if(ItemCart::where('id_user',$id_user)->where('id_product',$id)->exists()){
                            ItemCart::where('id_user',$id_user)
                            ->where('id_product',$id)
                            ->update(['status'=>0]);
                        }else{
                            $cart_item->id_user = $id_user;
                            $cart_item->id_product = $item['id'];
                            $cart_item->name = $prd['name'];
                            $cart_item->quanty = 1;
                            $cart_item->size = $item['size'];
                            $cart_item->color = $item['color'];
                            $cart_item->price = $prd['cost'];
                            $cart_item->image_url = $item['image_url'];
                            $cart_item->status = 1;

                            $cart_item->save();
                        }
                    }
                }
            }
        }
        // $now_quanty = ItemCart::where('id_user',$id_user)->where('id_product',$id)->first();
        // return $now_quanty->quanty;
    }

    public function ViewtoCart(){
        $cart = DB::table('item_carts')->where('status',1)->get();
       
        return view('cart',compact('cart'));
    }

}