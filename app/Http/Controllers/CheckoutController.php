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
            if (Cart::content()->count()==0)
            {
                return redirect('/');
            }
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
        if ($request->payment_method == 'Cash')
        {
            $this->orderId = Order::newOrder($request);
            OrderDetail::newOrderDetail($this->orderId);
            Cart::destroy();
            return redirect('/checkout/complete-order')->with('message', 'Your order info post successfully. Please wait, we will contact with you soon.');
        }
        elseif ($request->payment_method == 'Online')
        {
            $sslCommerzPayment = new SslCommerzPaymentController();
            $sslCommerzPayment->index($request);

        }
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

}
