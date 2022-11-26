<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function Index(){
        $product = DB::table('product')->get();
        return view('home',compact('product'));
        dd($product);
    }
}
