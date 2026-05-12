@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-8">
    Manage Products
</h1>

<form method="POST" action="/admin/products" class="bg-white p-6 rounded shadow mb-8">
    @csrf

    <input type="text" name="name" placeholder="Product Name"
        class="w-full border p-2 mb-4 rounded">

    <textarea name="description" placeholder="Description"
        class="w-full border p-2 mb-4 rounded"></textarea>

    <input type="number" name="price" placeholder="Price"
        class="w-full border p-2 mb-4 rounded">

    <input type="text" name="image" placeholder="/images/product.jpg"
        class="w-full border p-2 mb-4 rounded">

    <label class="block mb-4">
        <input type="checkbox" name="available">
        Available
    </label>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Add Product
    </button>
</form>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
@foreach($products as $product)
    <div class="bg-white p-5 rounded shadow">
        <h2 class="font-bold">{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p class="text-green-700 font-semibold">
            MWK {{ number_format($product->price) }}
        </p>
    </div>
@endforeach
</div>

@endsection