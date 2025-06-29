@extends('layouts.nav')
@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Checkout</h1>
    <form method="POST" action="{{ route('checkout.placeOrder') }}">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Shipping Address</label>
            <input name="address" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">UPI ID</label>
            <input name="upi" class="w-full border rounded px-3 py-2" required>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Place Order</button>
    </form>
    <div class="mt-6 text-right">
        <span class="font-bold text-xl">Total: ${{ $total }}</span>
    </div>
</div>
@endsection