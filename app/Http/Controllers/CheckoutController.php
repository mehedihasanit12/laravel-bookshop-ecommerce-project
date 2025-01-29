<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Session::get('id'))
        {
            return view('website.checkout.index');
        }
        else
            return redirect('/customer/login');
    }
}
