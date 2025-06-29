@extends('layouts.nav')
@section('content')
<div class="max-w-2xl mx-auto px-4 py-8 text-center">
    <h1 class="text-2xl font-bold mb-4">Order Confirmation</h1>
    <p class="mb-4">Thank you for your order! Your order number is <span class="font-bold">{{ $order }}</span>.</p>
    <p class="mb-4">Scan the QR code below to pay via UPI:</p>
    <img src="https://api.qrserver.com/v1/create-qr-code/?data=upi://pay?pa=demo@upi&pn=TeeStore&am=100&cu=INR&order={{ $order }}&size=200x200" alt="UPI QR" class="mx-auto mb-4">
    <p class="text-green-700 font-bold">Payment Pending</p>
</div>
@endsection