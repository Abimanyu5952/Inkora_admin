@extends('layouts.nav')
@section('content')
<!-- Parallax Banner -->
<div class="relative overflow-hidden h-64 flex items-center justify-center">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-300 via-blue-200 to-blue-100 opacity-80"></div>
    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?auto=format&fit=crop&w=1200&q=80"
         alt="User Dashboard Banner"
         class="absolute w-full h-full object-cover object-center mix-blend-overlay"
         style="transform: translateY(-10%);"
    >
    <div class="relative z-10 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-blue-900 drop-shadow-lg">User Dashboard</h1>
    </div>

    <h2 class="text-2xl font-bold mb-4">Welcome, {{ $user->name }}</h2>
    <div class="mb-4">
        <div class="font-semibold">Role:</div>
        <div>{{ $user->role }}</div>
    </div>
</div>
@endsection