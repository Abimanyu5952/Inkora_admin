@extends('layouts.nav')

@section('content')
<!-- Parallax Banner -->
<div class="relative overflow-hidden h-64 flex items-center justify-center">
    <div class="absolute inset-0 bg-gradient-to-r from-green-300 via-green-200 to-green-100 opacity-80"></div>
    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1200&q=80"
         alt="T-Shirts Banner"
         class="absolute w-full h-full object-cover object-center mix-blend-overlay"
         style="transform: translateY(-10%);"
    >
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 drop-shadow-lg">Designs Wise T-Shirt</h1>
        <p class="mt-4 text-lg text-green-800 font-medium">Trendy, Comfortable, and Unique T-Shirts for Everyone</p>
    </div>
</div>

<!-- T-Shirts Grid -->
<div class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-8 text-center text-gray-800">Our Latest Designs</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($tshirts as $shirt)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:scale-105 transition-transform duration-300">
            <img src="{{ $shirt->image ?? false ? asset('storage/' . $shirt->image) : 'https://placehold.co/300x300?text=No+Image' }}" alt="{{ $shirt['name'] }}" class="w-full h-56 object-cover">
            <div class="p-4">
                <div class="font-semibold text-lg mb-1">{{ $shirt['name'] }}</div>
                <div class="text-gray-500 mb-2">{{ $shirt['description'] }}</div>
                <div class="font-bold text-blue-600 mb-4">${{ $shirt['price'] }}</div>
                <form method="POST" action="/cart/add">
                    @csrf
                    <input type="hidden" name="shirt_id" value="{{ $shirt['id'] }}">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection