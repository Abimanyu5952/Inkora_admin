<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function home()
    {
    $tshirts = \App\Models\Product::where('type', 't-shirt')->get();
    return view('home', compact('tshirts'));
    }

    public function cart()
    {
        // Example cart data
        $cart = [
            ['name' => 'Classic Tee', 'quantity' => 2, 'price' => 19.99],
            ['name' => 'V-Neck', 'quantity' => 1, 'price' => 21.99],
        ];
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        return view('cart', compact('cart', 'total'));
    }

    public function about()
    {
        return view('about');
    }
}