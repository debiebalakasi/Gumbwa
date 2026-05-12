@extends('layouts.app')

@include('header')

@section('content')

<main class="pt-20 min-h-screen relative bg-cover bg-center bg-fixed"
      style="background-image: url('/images/farm-tour.jpg');">

    <!-- DARK OVERLAY (this darkens the whole page) -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- CONTENT WRAPPER -->
    <div class="relative z-10">

    <!-- HERO SECTION -->
<section class="h-[300px] flex items-center justify-center px-6">

    <div class="bg-black/60 text-white 
                max-w-4xl w-full 
                mx-auto 
                px-8 py-10 
                rounded-xl 
                text-center">

        <h1 class="text-3xl md:text-4xl font-bold mb-3">
            Discover Agrotourism at Gumbwa Agro Acres
        </h1>

        <p class="text-sm md:text-base leading-relaxed">
            Experience the farm like never before. Learn, relax, and immerse yourself in sustainable agriculture.
        </p>

    </div>

</section>

    <!-- ACTIVITIES -->
    <section class="max-w-5xl mx-auto px-6 py-16 grid gap-6 md:grid-cols-2">

        <div class="bg-white p-6 rounded-xl shadow text-center hover:-translate-y-2 transition">
            <h3 class="text-xl font-semibold mb-2">Guided Farm Tours</h3>
            <p>Explore our fields and learn modern and sustainable farming practices.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:-translate-y-2 transition">
            <h3 class="text-xl font-semibold mb-2">Planting & Harvesting</h3>
            <p>Participate in real farm activities and experience agriculture hands-on.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:-translate-y-2 transition">
            <h3 class="text-xl font-semibold mb-2">Farm-to-Table Experiences</h3>
            <p>Enjoy fresh meals prepared directly from farm-grown produce.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:-translate-y-2 transition">
            <h3 class="text-xl font-semibold mb-2">Workshops & Education</h3>
            <p>Learn climate-smart agriculture through interactive sessions.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center hover:-translate-y-2 transition md:col-span-2">
            <h3 class="text-xl font-semibold mb-2">Eco-friendly Accommodation</h3>
            <p>Relax in nature with eco-lodging and picnic areas.</p>
        </div>

    </section>

    <!-- BENEFITS -->
   <section class="min-h-[60vh] flex items-center justify-center px-6">

    <div class="bg-white p-8 rounded-xl shadow-lg max-w-xl w-full text-center">

        <h2 class="text-2xl font-bold text-Black-600 mb-6">
            Benefits
        </h2>

        <ul class="space-y-4 text-gray-700 text-base text-left mx-auto max-w-md">

            <li class="flex items-start gap-3">
                <span class="text-green-600 text-lg mt-1">✔</span>
                <span>Educational and interactive experience for all ages</span>
            </li>

            <li class="flex items-start gap-3">
                <span class="text-green-600 text-lg mt-1">✔</span>
                <span>Learn about climate-smart agriculture</span>
            </li>

            <li class="flex items-start gap-3">
                <span class="text-green-600 text-lg mt-1">✔</span>
                <span>Support local farming and rural communities</span>
            </li>

            <li class="flex items-start gap-3">
                <span class="text-green-600 text-lg mt-1">✔</span>
                <span>Enjoy fresh produce and farm-grown meals</span>
            </li>

        </ul>

    </div>

</section>

</main>

@include('footer')

@endsection