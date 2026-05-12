@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold text-center mt-10 mb-6">
    Admin - Orders
</h1>

<div class="max-w-6xl mx-auto px-6">

@foreach($orders as $order)
    <div class="bg-white shadow rounded p-5 mb-6">

        <p class="font-bold mb-2">
            Order #{{ $order->id }}
        </p>

        <p class="text-sm text-gray-600 mb-2">
            Payment: {{ $order->payment_method }}
        </p>

        <p class="text-sm text-gray-600 mb-2">
            Status: {{ $order->status }}
        </p>

       <ul class="mb-3">
@foreach(json_decode($order->items, true) as $item)
    <li class="flex justify-between">
        <span>
            {{ $item['name'] }} (x{{ $item['quantity'] }})
        </span>
        <span>
            MWK {{ number_format($item['price'] * $item['quantity']) }}
        </span>
    </li>
@endforeach
</ul>

        <p class="font-bold text-green-700">
            Total: MWK {{ number_format($order->total) }}
        </p>
<form method="POST" action="{{ route('admin.orders.updateStatus', $order->id) }}" class="mt-4">
    @csrf

    <select name="status" class="border p-2 rounded">
        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="paid" {{ $order->status == 'paid' ? 'selected' : '' }}>Paid</option>
        <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
    </select>

    <button class="bg-blue-600 text-white px-3 py-1 rounded ml-2">
        Update
    </button>
</form>
    </div>
@endforeach

</div>

@endsection