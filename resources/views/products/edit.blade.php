<!-- filepath: resources/views/products/edit.blade.php -->
@extends('layouts.nav')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow mt-8">
    <h2 class="text-2xl font-bold mb-4">Edit Product</h2>
    <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block mb-1">Name</label>
            <input name="name" class="w-full border rounded px-3 py-2" value="{{ $product->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Price</label>
            <input name="price" type="number" step="0.01" class="w-full border rounded px-3 py-2" value="{{ $product->price }}" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ $product->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Editable Letter</label>
            <input name="editable[letter]" class="w-full border rounded px-3 py-2" value="{{ $product->editable['letter'] ?? '' }}">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Editable Image</label>
            <input name="editable[image]" type="file" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Image</label>
            <input name="image" type="file" class="w-full border rounded px-3 py-2">
            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="w-24 mt-2">
            @endif
        </div>
        <div class="mb-4">
            <label class="block mb-1">Category</label>
            <select name="category" class="w-full border rounded px-3 py-2">
                <option value="">Select Category</option>
                <option value="Men" {{ $product->category == 'Men' ? 'selected' : '' }}>Men</option>
                <option value="Women" {{ $product->category == 'Women' ? 'selected' : '' }}>Women</option>
                <option value="Kids" {{ $product->category == 'Kids' ? 'selected' : '' }}>Kids</option>
            </select>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Update Product</button>
    </form>
</div>
@endsection