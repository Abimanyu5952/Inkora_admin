<!-- filepath: resources/views/products/create.blade.php -->
@extends('layouts.nav')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow mt-8">
    <h2 class="text-2xl font-bold mb-4">Add Product</h2>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">Product Type</label>
            <select name="type" class="w-full border rounded px-3 py-2" required>
                <option value="t-shirt">T-Shirt</option>
                <option value="mug">Mug</option>
                <option value="cap">Cap</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Name</label>
            <input name="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Price</label>
            <input name="price" type="number" step="0.01" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Description</label>
            <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Image</label>
            <input name="image" type="file" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1">Category</label>
            <select name="category" class="w-full border rounded px-3 py-2">
                <option value="">Select Category</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Kids">Kids</option>
            </select>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</button>
    </form>
</div>
@endsection