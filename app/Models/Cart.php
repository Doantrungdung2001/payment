<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class Cart{
    // public $product;
    // public $totalPrice = 0;
    // public $totalQuanty =0;
    // public $id_user =0;
    // public function __construct($cart){
    //     if($cart){
    //         $this->product = $cart->product;
    //         $this->totalPrice = $cart->totalPrice;
    //         $this->totalQuanty = $cart->totalQuanty;
    //         $this->id_user = $cart->id_user;
    //     } 
    // }
    
    // public function AddCart($productInfor , $id){
    //     $newProduct = ['quanty'=>0,'price'=>$productInfor['price'],'productInfo'=>$productInfor];
    //     if($this->product){
    //         if(array_key_exists($id,$this->product)){
    //             $newProduct =$this->product[$id];
    //         }
    //     }
        
    //     $newProduct['quanty']++;
    //     $newProduct['price'] = $newProduct['quanty'] * $productInfor['price'];
    //     $this->product[$id] = $newProduct;
    //     $this->totalPrice += $productInfor['price'];
    //     $this->totalQuanty++;
    //     $this->id_user = 2;
        
       
    //     DB::insert('INSERT into test_cart (id_user, productInfor,totalQuanty,totalPrice) 
    //     values (?, ?, ?, ?)', [$this->id_user,json_encode($this->product),$this->totalQuanty,$this->totalPrice]);
    // }
    
    // public function DeleteItemCart($id){
    //     $this->totalQuanty -=$this->product[$id]['quanty'];
    //     $this->totalPrice -= $this->product[$id]['price'];
    //     unset($this->product[$id]);
    // }

    // public function UpdateItemCart($id ,$quanty){
    //     $this->totalQuanty -= $this->product[$id]['quanty'];    
    //     $this->totalPrice -= $this->product[$id]['price'];
        
    //     $this->product[$id]['quanty'] = $quanty;
    //     $this->product[$id]['price'] = $quanty * $this->product[$id]['productInfo']['price'];

    //     $this->totalQuanty += $this->product[$id]['quanty'];
    //     $this->totalPrice += $this->product[$id]['price'];
    // }
}
?>