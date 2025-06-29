@extends('layouts.nav')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
    @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="name">Name</label>
            <input type="text" name="name" id="name" required class="w-full border px-3 py-2 rounded" value="{{ old('name') }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="email">Email</label>
            <input type="email" name="email" id="email" required class="w-full border px-3 py-2 rounded" value="{{ old('email') }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="phoneno">Phone Number</label>
            <input type="text" name="phoneno" id="phoneno" required class="w-full border px-3 py-2 rounded" value="{{ old('phoneno') }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold" for="message">Message</label>
            <textarea name="message" id="message" required class="w-full border px-3 py-2 rounded" rows="4">{{ old('message') }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Send Message</button>
    </form>
</div>
@endsection