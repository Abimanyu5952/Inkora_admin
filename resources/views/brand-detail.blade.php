@extends('layouts.nav')
@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">{{ $brand }} Collection</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($products as $product)
        <div class="bg-white rounded-lg shadow p-4">
            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://placehold.co/300x300?text=No+Image' }}" class="w-full h-48 object-cover mb-2" alt="">
            <div class="font-bold">{{ $product->name }}</div>
            <div class="font-bold text-green-700 mb-2">${{ $product->price }}</div>
            <a href="{{ route('product.detail', $product) }}" class="bg-blue-600 text-white px-4 py-2 rounded">View</a>
        </div>
        @endforeach
    </div>
</div>
@endsection