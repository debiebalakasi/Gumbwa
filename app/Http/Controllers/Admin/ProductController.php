<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display all products.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('admin.products', compact('products'));
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'available' => $request->has('available'),
        ]);

        return redirect('/admin/products')
            ->with('success', 'Product added successfully');
    }
}