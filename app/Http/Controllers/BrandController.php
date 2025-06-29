<?php
namespace App\Http\Controllers;

use App\Models\Product;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Product::select('brand')->distinct()->pluck('brand')->filter()->values();
        return view('brands', compact('brands'));
    }

    public function show($brand)
    {
        $products = Product::where('brand', $brand)->get();
        return view('brand-detail', compact('brand', 'products'));
    }
}