<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\invoice;
class InvoiceController extends Controller
{
    public function Invoice(){
        $product = DB::table('item_carts')->where('status',1)->get();
        return view('invoice',compact('product'));   
    }
}
