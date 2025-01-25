<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $book;

    public function index()
    {
        return view('website.cart.index', [
            'categories' => Category::all(),
            'cart_items' => Cart::content()
        ]);
    }

    public function store(Request $request,$id)
    {
        $this->book = Book::find($id);

        Cart::add([
            'id' => $this->book->id,
            'name' => $this->book->name,
            'qty' => $request->qty,
            'price' => $this->book->selling_price,
            'options' => [
                'image' => $this->book->image
            ]
        ]);

        return redirect('/cart/index')->with('message', 'Book Cart add successfully.');
    }

    public function update(Request $request)
    {
        foreach ($request->qty as $item)
        {
            Cart::update($item['rowId'], $item['qty']);
        }

        return back()->with('message', 'Bok Cart update successfully.');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);

        return back()->with('delete-message', 'Book Cart delete successfully.');
    }
}
