<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('checkout');
});


Route::post('checkout',[CheckoutController::class,'index'])->name('checkout');

Route::get('checkout/response', function (Request $request){

    return $request->all();

});

/*

Card number : 4987654321098769
Cardholder Name : Test Account
Expiry Month : 12
Expiry year : 25
CVV : 123

 */
