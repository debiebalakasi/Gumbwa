<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::where('available', true)->get();
        $cart = session()->get('cart', []);

        return view('store', compact('products', 'cart'));
    }
}
