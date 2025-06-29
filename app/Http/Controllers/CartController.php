<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        return view('cart', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->input('shirt_id'));
        if (!$product) return back()->with('error', 'Product not found.');
        $cart = session()->get('cart', []);
        $cart[] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image ?? null,
        ];
        session(['cart' => $cart]);
        return redirect('/cart');
    }
}