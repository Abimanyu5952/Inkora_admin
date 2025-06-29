<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function confirmation($order)
    {
        // Demo: Show order summary and fake UPI QR
        return view('order-confirmation', ['order' => $order]);
    }

    public function myOrders()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('orders.my-orders', compact('orders'));
    }
}