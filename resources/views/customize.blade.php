@extends('layouts.nav')
@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Customize {{ $product->name }}</h1>
    <form method="POST" action="{{ route('product.customize.save', $product) }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Custom Text</label>
            <input name="text" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Text Color</label>
            <input name="color" type="color" class="w-16 h-10 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Upload Image</label>
            <input name="image" type="file" class="w-full border rounded px-3 py-2">
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Save Customization</button>
    </form>
</div>
@endsection