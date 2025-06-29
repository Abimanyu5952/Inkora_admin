@extends('layouts.nav')
@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/300x300?text=No+Image' }}" class="w-full md:w-80 h-80 object-cover rounded shadow">
        <div>
            <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
            <div class="mb-2 text-gray-600">{{ $product->brand }}</div>
            <div class="mb-2">Size: {{ $product->size }}</div>
            <div class="mb-2">Color: {{ $product->color }}</div>
            <div class="mb-2 font-bold text-green-700 text-xl">${{ $product->price }}</div>
            <div class="mb-4">{{ $product->description }}</div>
            <form method="POST" action="{{ route('cart.add') }}">
                @csrf
                <input type="hidden" name="shirt_id" value="{{ $product->id }}">
                <button class="bg-green-600 text-white px-4 py-2 rounded">Add to Cart</button>
            </form>
            <a href="{{ route('product.customize', $product) }}" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded">Customize</a>
        </div>
    </div>
</div>
@endsection