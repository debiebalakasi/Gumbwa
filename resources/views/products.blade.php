@extends('layouts.app')

@include('header')

@section('content')
<section class="relative h-[40vh] flex items-center justify-center text-center">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('/images/farm-tour.jpg');">
    </div>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- CONTENT -->
    <div class="relative text-white">
        <h1 class="text-4xl font-bold mb-2">Our Products</h1>
        <p class="text-lg">Quality agricultural products grown sustainably</p>
    </div>

</section>


    <!-- CONTENT -->
    <section class="max-w-6xl mx-auto px-6 py-16 space-y-16">

        <!-- GRAIN & STAPLE CROPS -->
        <div>
            <h2 class="text-2xl font-bold mb-6 text-green-700">
                Grain & Staple Crops
            </h2>

           <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-2 justify-center max-w-3xl mx-auto">

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/maize.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Maize</h3>
                    <p class="text-gray-600 text-sm">Household and bulk supply</p>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/rice.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Rice</h3>
                    <p class="text-gray-600 text-sm">Paddy and packaged rice</p>
                </div>

            </div>
        </div>


        <!-- FRESH PRODUCE -->
        <div>
            <h2 class="text-2xl font-bold mb-6 text-green-700">
                Fresh Produce
            </h2>

           <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-2 justify-center max-w-3xl mx-auto">

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/vegetables.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Vegetables</h3>
                    <p class="text-gray-600 text-sm">Irrigated and seasonal vegetables</p>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/fruits.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Fruits</h3>
                    <p class="text-gray-600 text-sm">Selected seasonal crops</p>
                </div>

            </div>
        </div>


        <!-- VALUE-ADDED PRODUCTS -->
        <div>
            <h2 class="text-2xl font-bold mb-6 text-green-700">
                Value-Added Products
            </h2>

            <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/packaged-maize.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Packaged Maize</h3>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/packaged-rice.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Packaged Rice</h3>
                </div>

                <div class="bg-white rounded-xl shadow p-5">
                    <img src="/images/products/fresh-produce.jpg" class="w-full h-40 object-cover rounded-lg mb-4">
                    <h3 class="font-semibold text-lg">Market-ready Fresh Produce</h3>
                </div>

            </div>
        </div>


        <!-- FOOT NOTE -->
        <div class="text-center max-w-3xl mx-auto">
            <p class="text-gray-600 italic">
                All products are produced using sustainable and quality-assured practices.
            </p>
        </div>

    </section>

</main>
@include('footer')
@endsection