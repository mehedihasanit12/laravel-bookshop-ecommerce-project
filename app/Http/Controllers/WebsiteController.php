<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'categories' => Category::all(),
            'authors' => Author::all(),
            'cart_items' => Cart::content()
        ]);
    }

    public function category($id)
    {
        return view('website.category.index', [
            'categories' => Category::all(),
            'category' => Category::find($id)
        ]);
    }

    public function product($id)
    {
        return view('website.product.index', [
            'categories' => Category::all(),
            'book' => Book::find($id),
            'cart_items' => Cart::content()
        ]);
    }


}
