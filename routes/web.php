<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'App\Http\Controllers\CartsController@Index');
Route::get('/AddtoCart/{id}', 'App\Http\Controllers\CartsController@AddToCart');
Route::get('/Delete-Item-Cart/{id}', 'App\Http\Controllers\CartsController@DeleteItemToCart');
Route::get('/Cart', 'App\Http\Controllers\CartsController@ViewtoCart');
Route::get('/same-product', 'App\Http\Controllers\CartsController@SameProduct');
Route::get('/buy-again', 'App\Http\Controllers\CartsController@BuyAgain');
Route::get('/Delete-Item-List-Cart/{id}', 'App\Http\Controllers\CartsController@DeleteItemListToCart');
Route::get('/Save-Item-List-Cart/{id}/{quanty}', 'App\Http\Controllers\CartsController@SaveItemListToCart');
Route::get('/Update-Item-List-Cart/{id}/{quanty}', 'App\Http\Controllers\CartController@UpdateItemListCart');

//API
Route::get('/Api/Product-Cart', 'App\Http\Controllers\CartController@product_cart');
Route::get('/Api/totalQuanty-Product-Cart', 'App\Http\Controllers\CartController@total_product_cart');

//Invoice
Route::get('/create-invoice','App\Http\Controllers\InvoiceController@Invoice');
Route::get('/payment','App\Http\Controllers\InvoiceController@SaveInvoice');

//Payment
Route::get('/Sucess-payment','App\Http\Controllers\PaymentController@DonePayment');
Route::post('/VN-pay-payment','App\Http\Controllers\PaymentController@VnpayPayment');
Route::get('/Paypal-payment','App\Http\Controllers\PaymentController@PaypalPayment');