@extends('layouts.nav')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Brands</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <?php foreach($brands as $brand): ?>
        <a href="{{ route('brand.detail', ['brand' => $brand]) }}" class="...">{{ $brand }}</a>
        <?php endforeach; ?>
    </div>
</div>
@endsection