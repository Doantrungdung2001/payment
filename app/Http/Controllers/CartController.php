<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;

class CartController extends Controller
{
    public function Index(){
        $product = DB::table('product')->get();
        return view('home',compact('product'));
        dd($product);
    }

    public function AddCart(Request $req,$id){
        
        $product = DB::table('product')->where('id',$id)->first();
        if($product != null){
            if(Session('Cart') != null){
                $oldcart = Session('Cart');//oldcart la gio hang hien tai
            }else{
                $oldcart = null;
            }
            //Gio hang moi
            $newcart = new Cart($oldcart); //tao mot doi tuong gio hang moi tu lop Cart    
            $newcart->AddCart($product,$id);

            $req->session()->put('Cart',$newcart);
           // dd($new_cart);   
        }
        return view('item',compact('newcart'));
        //dd($product);
    }
}
