<!-- filepath: resources/views/shop.blade.php -->
@extends('layouts.nav')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shop T-Shirts</h1>
    <form method="GET" class="mb-6 flex flex-wrap gap-4">
        <select name="brand" class="border rounded px-3 py-2">
            <option value="">All Brands</option>
            @foreach($brands as $brand)
            <option value="{{ $brand }}">{{ $brand }}</option>
            @endforeach
        </select>
        <select name="size" class="border rounded px-3 py-2">
            <option value="">All Sizes</option>
            <option>S</option><option>M</option><option>L</option><option>XL</option>
        </select>
        <select name="color" class="border rounded px-3 py-2">
            <option value="">All Colors</option>
            <option>Red</option><option>Blue</option><option>Green</option>
        </select>
        <select name="category" class="border rounded px-3 py-2">
            <option value="">All Categories</option>
            <option>Men</option><option>Women</option><option>Kids</option>
        </select>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Filter</button>
    </form>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow p-4">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-48 object-cover mb-2">
            <div class="font-bold">{{ $product->name }}</div>
            <div class="text-gray-600 mb-2">{{ $product->brand }}</div>
            <div class="font-bold text-green-700 mb-2">${{ $product->price }}</div>
            <a href="{{ route('product.detail', $product) }}" class="bg-blue-600 text-white px-4 py-2 rounded">View</a>
        </div>
        @endforeach
    </div>
</div>
@endsection