@extends('layouts.app')

@section('content')

@include('header')


<main class="font-sans bg-gray-50 text-gray-800">

    <!-- HERO SECTION -->
   <section class="relative min-h-[80vh] flex items-center justify-center text-center px-6">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img src="/images/hero.jpg" class="w-full h-full object-cover">
    </div>

    <!-- DARK OVERLAY -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- CONTENT -->
    <div class="relative text-white max-w-4xl w-full">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
            Cultivating Sustainable Growth
        </h2>

        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-3">
            Farm-direct quality. Climate-smart production. Reliable supply. Experiential agrotourism.
        </p>

        <p class="text-base md:text-lg text-left mb-6">
            Gumbwa Agro Acres combines modern farming, irrigation, value addition, and agrotourism 
            to deliver high-quality crops and unique farm experiences. We contribute to Malawi’s 
            food security, rural economic development, and sustainable tourism.
        </p>

        <div class="flex justify-center gap-4 flex-wrap">

            <a href="/services"
               class="bg-green-700 hover:bg-green-900 text-white px-6 py-2 rounded-full font-semibold transition transform hover:-translate-y-1">
                Explore Services
            </a>

            <a href="/agrotourism"
               class="border-2 border-white text-white px-6 py-2 rounded-full bg-black/20 hover:bg-green-900 transition">
                Discover Agrotourism
            </a>

            <a href="/store"
               class="bg-green-600 hover:bg-green-900 text-white px-6 py-2 rounded-full font-semibold transition transform hover:-translate-y-1">
                Visit Our Store
            </a>

        </div>
    </div>

</section>

    <!-- WHY CHOOSE SECTION -->
    <section class="py-16 px-6 bg-blue-50 text-center">

        <h2 class="text-3xl font-bold mb-10">
            Why Choose Gumbwa Agro Acres?
        </h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            <div class="bg-gray-100 p-6 rounded-xl shadow hover:-translate-y-2 hover:bg-green-50 transition">
                <h3 class="text-green-700 font-semibold mb-2">Irrigated Farming</h3>
                <p>Year-round crop production using climate-smart irrigation systems.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-xl shadow hover:-translate-y-2 hover:bg-green-50 transition">
                <h3 class="text-green-700 font-semibold mb-2">Quality Crops</h3>
                <p>Maize, rice, vegetables and fruits produced under quality-controlled systems.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-xl shadow hover:-translate-y-2 hover:bg-green-50 transition">
                <h3 class="text-green-700 font-semibold mb-2">Value Addition</h3>
                <p>Cleaning, grading, packaging and market-ready preparation.</p>
            </div>

            <div class="bg-gray-100 p-6 rounded-xl shadow hover:-translate-y-2 hover:bg-green-50 transition">
                <h3 class="text-green-700 font-semibold mb-2">Agrotourism</h3>
                <p>Guided farm tours, eco-lodging and educational farm experiences.</p>
            </div>

        </div>
    </section>

</main>

@include('footer')
@endsection