<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('store')->with('error', 'Product not found');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('store')->with('success', 'Product added to cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('store');
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->route('store')->with('success', 'Cart cleared');
    }

    public function index()
    {
        $products = Product::where('available', true)->get();
        $cart = session()->get('cart', []);

        return view('store', compact('products', 'cart'));
    }

   public function checkout(Request $request)
{
    $cart = session()->get('cart', []);

    if (count($cart) == 0) {
        return redirect()->route('store')->with('error', 'Cart is empty');
    }

    $paymentMethod = $request->payment_method;

    // Calculate total
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Save order in database
    Order::create([
        'items' => json_encode($cart),
        'total' => $total,
        'payment_method' => $paymentMethod,
        'status' => 'pending'
    ]);

    // Clear cart
    session()->forget('cart');

    return redirect()->route('store')->with('success', 'Order placed successfully!');
}
}