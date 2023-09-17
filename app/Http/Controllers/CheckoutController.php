<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index(){

        $order = Order::create([
            'total_price' => 2000
        ]);

        $PaymentKey = PayMobController::pay($order->total_price,$order->id);

        return view('paymob_frame')->with(['token' => $PaymentKey]);

    }
}
