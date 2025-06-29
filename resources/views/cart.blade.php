@extends('layouts.nav')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold mb-6 text-center">Your Cart</h1>
    @if(count($cart) > 0)
    <table class="min-w-full bg-white rounded shadow">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b text-left">T-Shirt</th>
                <th class="px-4 py-2 border-b text-left">Quantity</th>
                <th class="px-4 py-2 border-b text-left">Price</th>
                <th class="px-4 py-2 border-b text-left">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
            <tr>
                <td class="px-4 py-2 border-b">
                    <div class="flex items-center">
                        <img src="{{ $item['image'] ?? false ? asset('storage/' . $item['image']) : 'https://placehold.co/300x300?text=No+Image' }}" alt="{{ $item['name'] }}" class="w-16 h-16 object-cover rounded mr-4">
                        <span>{{ $item['name'] }}</span>
                    </div>
                </td>
                <td class="px-4 py-2 border-b">{{ $item['quantity'] }}</td>
                <td class="px-4 py-2 border-b">${{ $item['price'] }}</td>
                <td class="px-4 py-2 border-b">${{ $item['price'] * $item['quantity'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-6 text-right">
        <span class="font-bold text-xl">Total: ${{ $total }}</span>
    </div>
    <div class="mt-8 text-center">
        <button class="bg-gradient-to-r from-pink-500 to-yellow-500 text-white px-8 py-3 rounded-lg text-lg font-bold shadow hover:from-pink-600 hover:to-yellow-600 transition">
            Proceed to Payment
        </button>
    </div>
    @else
    <div class="text-gray-600 text-center">Your cart is empty.</div>
    @endif
</div>
@endsection