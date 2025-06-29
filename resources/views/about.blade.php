@extends('layouts.nav')

@section('content')
<!-- Parallax Banner -->
<div class="relative overflow-hidden h-64 flex items-center justify-center">
    <div class="absolute inset-0 bg-gradient-to-r from-green-300 via-green-200 to-green-100 opacity-80"></div>
    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1200&q=80"
         alt="About Banner"
         class="absolute w-full h-full object-cover object-center mix-blend-overlay"
         style="transform: translateY(-10%);"
    >
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-green-900 drop-shadow-lg">About Us</h1>
    </div>
</div>

<div class="max-w-2xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-800">Our Story</h2>
    <p class="text-lg text-gray-700 mb-4 text-center">
        Welcome to TeeStore! We are passionate about creating high-quality, comfortable, and stylish T-shirts made from premium cotton fabric. Our journey began with a simple idea: to offer the best T-shirts that feel as good as they look.
    </p>
    <p class="text-lg text-gray-700 mb-4 text-center">
        Our team of five friends, driven by a love for fashion and technology, came together to build this e-commerce platform. We believe in sustainable materials, ethical production, and delivering value directly to our customers.
    </p>
    <p class="text-gray-600 text-center">
        Every TeeStore shirt is crafted with care, ensuring softness, durability, and vibrant designs. Thank you for supporting our dream and being part of our story!
    </p>
</div>
@endsection