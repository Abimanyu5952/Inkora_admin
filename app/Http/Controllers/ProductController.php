<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('product-detail', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'brand' => 'nullable',
            'category' => 'nullable',
            'size' => 'nullable',
            'color' => 'nullable',
            'price' => 'required|numeric',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'type' => 'nullable|string', // Add this if you want to allow type from form
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('store', 'public');
        }

        // Set default type if not provided
        if (empty($data['type'])) {
            $data['type'] = 'standard';
        }

        Product::create($data);

        return redirect()->route('shop')->with('success', 'Product added!');
    }

    public function customize(Product $product)
    {
        return view('customize', compact('product'));
    }

    public function saveCustomization(Request $request, Product $product)
    {
        $custom = $request->validate([
            'text' => 'nullable|string',
            'color' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $custom['image'] = $request->file('image')->store('custom', 'public');
        }
        $product->customizable = $custom;
        $product->save();
        return redirect()->route('cart')->with('success', 'Customization saved!');
    }
}