<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    public static $order;

    public static function newOrder($request)
    {
        self::$order = new Order();

        self::$order->customer_id = Session::get('id');
        self::$order->order_total = $request->order_total;
        self::$order->tax_total = $request->tax_total;
        self::$order->shipping_total = $request->shipping_total;
        self::$order->order_date = date('Y-m-d');
        self::$order->order_timestamp = strtotime(date('Y-m-d'));
        self::$order->delivery_address = $request->delivery_address;
        self::$order->payment_method = $request->payment_method;
        self::$order->save();

        return self::$order->id;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
