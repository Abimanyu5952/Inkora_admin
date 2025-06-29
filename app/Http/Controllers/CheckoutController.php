<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        return view('checkout', compact('cart', 'total'));
    }

    public function placeOrder(Request $request)
    {
        // Store order logic here
        $orderId = rand(1000,9999); // Demo
        session()->forget('cart');
        return redirect()->route('order.confirmation', ['order' => $orderId]);
    }
}