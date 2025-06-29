<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->brand) $query->where('brand', $request->brand);
        if ($request->size) $query->where('size', $request->size);
        if ($request->color) $query->where('color', $request->color);
        if ($request->category) $query->where('category', $request->category);

        $products = $query->get();
        $brands = Product::select('brand')->distinct()->pluck('brand');
        return view('shop', compact('products', 'brands'));
    }
}