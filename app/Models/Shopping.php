<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Shopping extends Model
{
    use HasFactory;
    public $productInfor;
    public $totalPrice = 0;
    public $totalQuanty =0;
    public $id_user =0;
    public function __construct($cart){
        if($cart){
            $this->product = $cart->productInfor;
            // $this->totalPrice = $cart->totalPrice;
            // $this->totalQuanty = $cart->totalQuanty;
            $this->id_user = $cart->id_user;
        } 
    }
    
    public function AddCart($productInfor , $id,$id_user){
        $newProduct = ['quanty'=>0,'price'=>$productInfor['price'],'productInfo'=>$productInfor];
        // $data = DB::table('shoppings')->where('id_user',$id_user)->get();
        // if($data->productInfor)
        if($this->product){
            if(array_key_exists($id,$this->product)){
                $newProduct =$this->product[$id];
            }
            $newProduct['quanty']++;
            $newProduct['price'] = $newProduct['quanty'] * $productInfor['price'];
            $this->product[$id] = $newProduct;
            //$this->id_user = $id_user;

            DB::table('shoppings')
            ->where('user_id', $id_user)
            ->update(['productInfor' =>json_encode($this->product)]);
        }else{
            $this->id_user = $id_user;
            DB::insert('INSERT INTO shoppings (id_user, productInfor) 
            VALUES (?, ?)', [$this->id_user,json_encode($this->product)]);
        }
        
        // $newProduct['quanty']++;
        // $newProduct['price'] = $newProduct['quanty'] * $productInfor['price'];
        // $this->product[$id] = $newProduct;
        // $this->totalPrice += $productInfor['price'];
        // $this->totalQuanty++;
        //$this->id_user = $id_user;               
        
    }
    


    public function DeleteItemCart($id){
        $this->totalQuanty -=$this->product[$id]['quanty'];
        $this->totalPrice -= $this->product[$id]['price'];
        unset($this->product[$id]);
    }

    public function UpdateItemCart($id ,$quanty){
        # code...
        $this->totalQuanty -= $this->product[$id]['quanty'];    
        $this->totalPrice -= $this->product[$id]['price'];
        
        $this->product[$id]['quanty'] = $quanty;
        $this->product[$id]['price'] = $quanty * $this->product[$id]['productInfo']['price'];

        $this->totalQuanty += $this->product[$id]['quanty'];
        $this->totalPrice += $this->product[$id]['price'];
    }
}
