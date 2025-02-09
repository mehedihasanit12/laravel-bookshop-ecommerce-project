<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Cart;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'banner_book_one'       => Book::latest()->first(),
            'banner_book_two'       => Book::latest()->skip(1)->first(),
            'slider_book'           => Book::latest()->take(4)->get(),
            'new_book'              => Book::latest()->take(6)->get(),
            'new_sub_categories'    => SubCategory::latest()->take(3)->get(),
            'home_category_one'     => Category::where('home_status', 1)->orderBy('id', 'asc')->first(),
            'home_category_two'     => Category::where('home_status', 1)->orderBy('id', 'asc')->skip(1)->first(),
            'authors'               => Author::all(),
            'feature_products'      => Book::latest()->skip(7)->take(3)->get(),
            'special_offer'         => Book::orderBy('id', 'asc')->take(4)->get(),
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

    public function authorDetail($id)
    {
        return view('website.author.index', ['author' => Author::find($id)]);
    }

}
