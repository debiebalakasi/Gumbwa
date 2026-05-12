<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<!-- ADMIN NAV -->
<div class="bg-gray-800 text-white p-4 flex gap-6">
    <a href="/admin/orders">Orders</a>
    <a href="#">Products</a>
    <a href="/store">View Store</a>
</div>

<div class="p-6">
    @yield('content')
</div>

</body>
</html>