<?php

namespace App\Http\Controllers;

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
}
