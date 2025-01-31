<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Session::get('id'))
        {
            return view('website.checkout.index', [
                'cart_items' => Cart::content()
            ]);
        }
        else
            return redirect('/customer/login');
    }

    private $orderId;
    public function newOrder(Request $request)
    {
        $this->orderId = Order::newOrder($request);
        OrderDetail::newOrderDetail($this->orderId);
        return redirect('/checkout/complete-order')->with('message', 'Your order info post successfully. Please wait, we will contact with you soon.');
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

}
