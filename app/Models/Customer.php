<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public static $customer, $image, $imageName, $imageUrl, $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        return self::$imageUrl;
    }

    public static function newCustomer($request)
    {
        self::$customer = new Customer();

        if ($request->file('image'))
        {
            self::$customer->image = self::getImageUrl($request);
        }

        if ($request->blood_group)
        {
            self::$customer->blood_group = $request->blood_group;
        }

        if ($request->date_of_birth)
        {
            self::$customer->date_of_birth = $request->date_of_birth;
        }

        if ($request->address)
        {
            self::$customer->address = $request->address;
        }

        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->password = bcrypt($request->password);
        self::$customer->mobile = $request->mobile;
        self::$customer->save();

        return self::$customer;
    }

    public static function updateCustomer($request,$id)
    {
        self::$customer = Customer::find($id);

        if ($request->file('image'))
        {
            self::$customer->image = self::getImageUrl($request);
        }

        if ($request->blood_group)
        {
            self::$customer->blood_group = $request->blood_group;
        }

        if ($request->date_of_birth)
        {
            self::$customer->date_of_birth = $request->date_of_birth;
        }

        if ($request->address)
        {
            self::$customer->address = $request->address;
        }

        if ($request->password)
        {
            self::$customer->password = $request->password;
        }

        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        self::$customer->save();

        return self::$customer;
    }

    public static function deleteCustomer($id)
    {
        self::$customer = Customer::find($id);

        if (isset(self::$customer->image))
        {
            unlink(self::$customer->image);
        }

        self::$customer->delete();
    }
}
