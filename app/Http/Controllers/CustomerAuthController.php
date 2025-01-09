<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    public function index()
    {
        return view('customer.auth.login.index');
    }

    public function registration()
    {
        return view('customer.auth.registration.index');
    }
}
