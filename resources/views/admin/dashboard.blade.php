@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-8">
    Admin Dashboard
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <a href="/admin/orders" class="bg-white p-6 rounded shadow hover:shadow-lg">
        <h2 class="text-xl font-semibold">Manage Orders</h2>
        <p class="text-gray-600 mt-2">
            View and update customer orders
        </p>
    </a>

    <a href="/admin/products" class="bg-white p-6 rounded shadow hover:shadow-lg">
        <h2 class="text-xl font-semibold">Manage Products</h2>
        <p class="text-gray-600 mt-2">
            Add, edit and remove products
        </p>
    </a>

    <a href="/admin/news" class="bg-white p-6 rounded shadow hover:shadow-lg">
        <h2 class="text-xl font-semibold">Manage News</h2>
        <p class="text-gray-600 mt-2">
            Publish farm news and updates
        </p>
    </a>

</div>

@endsection