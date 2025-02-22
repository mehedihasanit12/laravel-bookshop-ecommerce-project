<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;

    public function index()
    {
        return view('customer.auth.login.index');
    }

    public function registration()
    {
        return view('customer.auth.registration.index');
    }

    public function newCustomer(Request $request)
    {
       $this->customer = Customer::newCustomer($request);
       Session::put('id', $this->customer->id);
       Session::put('name', $this->customer->name);
       Session::put('email', $this->customer->email);
       Session::put('image', $this->customer->image);

       return redirect('/checkout/index');
    }

    public function customerLogin(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();

        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('id', $this->customer->id);
                Session::put('name', $this->customer->name);
                Session::put('email', $this->customer->email);
                Session::put('image', $this->customer->image);

                return redirect('/checkout/index');
            }
            else
            {
                return back()->with('message', 'Password is invalid.');
            }
        }
        else
        {
            return back()->with('message', 'Email address is invalid.');
        }
    }

    public function customerLogout()
    {
        Session::forget('id');
        Session::forget('name');
        Session::forget('email');
        Session::forget('image');
        Session::flush();

        return redirect('/');
    }

    public function customerOrder($customer_id)
    {
        return view('customer.order.index', [
            'customer_orders' => Order::where('customer_id', $customer_id)->get()
        ]);
    }

    public function customerOrderDetail($order_id)
    {
        return view('customer.order.detail', [
            'customer_order_details' => OrderDetail::where('order_id', $order_id)->get()
        ]);
    }

    public function customerProfile()
    {
        return view('customer.profile.index');
    }
}
