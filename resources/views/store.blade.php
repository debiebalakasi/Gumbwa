@extends('layouts.app')

@section('content')
@include('header')

<div class="flex-grow">
<h1 class="text-3xl font-bold text-center mt-10 mb-6">
    Gumbwa Agro Acres Store
</h1>

<p class="text-center text-gray-600 mb-10">
    Shop fresh farm produce directly from us
</p>

<!-- PRODUCTS GRID -->
<div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6">

@forelse($products as $product)

<div class="bg-white p-5 rounded-xl shadow">

    <img src="{{ $product->image ?? '/images/default.jpg' }}" 
         class="w-full h-40 object-cover rounded mb-4">

    <h2 class="font-semibold text-lg">{{ $product->name }}</h2>

    <p class="text-gray-600 text-sm mb-2">
        {{ $product->description }}
    </p>

    <p class="text-green-700 font-bold mb-3">
        MWK {{ number_format($product->price) }}
    </p>

    <form action="{{ route('cart.add', $product->id) }}" method="POST">
        @csrf
        <button class="bg-green-600 text-white px-4 py-2 rounded w-full">
            Add to Cart
        </button>
    </form>

</div>

@empty
<p class="text-center col-span-3">No products available</p>
@endforelse

</div>

<!-- CHECKOUT BUTTON -->
<div class="text-center mt-10">
    @if(count($cart) == 0)
        <button class="bg-gray-400 text-white px-6 py-3 rounded cursor-not-allowed" disabled>
            Cart is Empty
        </button>
    @else
        <button onclick="showCheckout()" class="bg-green-700 text-white px-6 py-3 rounded">
            Proceed to Checkout
        </button>
    @endif
</div>

<!-- CHECKOUT SECTION -->
<div id="checkoutSection" class="hidden max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">

    <h2 class="text-2xl font-bold mb-4">Checkout</h2>

    @if(count($cart) == 0)
        <p>Your cart is empty</p>
    @else

        <!-- CART ITEMS -->
        <ul class="mb-4">
    @php $total = 0; @endphp

    @foreach($cart as $id => $item)
        @php $total += $item['price'] * $item['quantity']; @endphp

        <li class="flex justify-between border-b py-2">
            <span>
                {{ $item['name'] }} (x{{ $item['quantity'] }})
                - MWK {{ number_format($item['price']) }}
            </span>

            <form action="{{ route('cart.remove', $id) }}" method="POST">
                @csrf
                <button class="text-red-500 text-sm">Remove</button>
            </form>
        </li>
    @endforeach
</ul>

<!-- TOTAL -->
<div class="flex justify-between font-bold text-lg border-t pt-3">
    <span>Total:</span>
    <span>MWK {{ number_format($total) }}</span>
</div>

        <!-- PAYMENT -->
        <h3 class="font-semibold mb-2">Select Payment Method</h3>

        <form method="POST" action="{{ route('checkout') }}">
            @csrf

            <select name="payment_method" class="w-full border p-2 rounded mb-4">
                <option value="Bank">Bank</option>
                <option value="Mpamba">Mpamba</option>
                <option value="Airtel">Airtel Money</option>
            </select>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                Confirm Order
            </button>
        </form>

    @endif

    <!-- BACK BUTTON -->
    <button onclick="hideCheckout()" class="mt-4 text-blue-600">
        ← Back to Store
    </button>
    <div class="text-center mt-6">
    <a href="/admin/orders" class="bg-black text-white px-4 py-2 rounded">
        Go to Admin Panel
    </a>
</div>

</div>

<!-- JS -->
<script>
function showCheckout() {
    document.getElementById('checkoutSection').classList.remove('hidden');
    window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
}

function hideCheckout() {
    document.getElementById('checkoutSection').classList.add('hidden');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
</div>

<footer>
    <div class="bg-green-800 text-white text-center py-4 text-sm">
        © 2026 Gumbwa Agro Acres | All Rights Reserved
    </div>
</footer>

@endsection