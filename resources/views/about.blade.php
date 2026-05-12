@extends('layouts.app')

@section('content')

@include('header')

<main class="bg-gray-50 text-gray-800">

    <!-- HERO -->
    <section class="text-center py-24 bg-green-700 text-white pt-28">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            About Gumbwa Agro Acres
        </h1>
        <p class="max-w-2xl mx-auto text-lg">
            Building sustainable agriculture, strengthening food security,
            and creating impactful rural development in Malawi.
        </p>
    </section>

    <!-- COMPANY OVERVIEW -->
    <section class="max-w-4xl mx-auto mt-10 p-8 bg-white rounded-xl shadow text-center">
        <h2 class="text-2xl font-bold mb-4">Company Overview</h2>
        <p>
            Gumbwa Agro Acres is a Malawian agribusiness enterprise dedicated to sustainable crop production,
            irrigation-based farming, value-added agricultural products, and agrotourism experiences.
            We aim to strengthen food security, improve rural livelihoods, and promote climate-smart agricultural practices.
        </p>
    </section>

    <!-- VISION & MISSION -->
    <section class="max-w-5xl mx-auto mt-10 grid md:grid-cols-2 gap-6 px-6">

        <div class="bg-white p-6 rounded-xl shadow text-center">
            <h2 class="text-xl font-bold mb-2">Vision</h2>
            <p>
                To be Malawi’s leading agribusiness delivering high-quality agricultural products
                while driving sustainable rural development and experiential tourism.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow text-center">
            <h2 class="text-xl font-bold mb-2">Mission</h2>
            <p>
                To sustainably produce, process, and commercialize agricultural products through innovative farming,
                efficient irrigation, partnerships, and immersive agrotourism.
            </p>
        </div>

    </section>

    <!-- CORE VALUES -->
    <section class="text-center mt-16 px-6">
        <h2 class="text-3xl font-bold mb-8">Core Values</h2>

        <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-3 gap-6">

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Sustainability & Environmental Stewardship
            </div>

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Quality & Consistency
            </div>

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Innovation & Technology
            </div>

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Integrity & Transparency
            </div>

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Community Empowerment
            </div>

            <div class="bg-green-700 text-white p-5 rounded-lg hover:bg-green-900 transition">
                Experiential Learning & Tourism
            </div>

        </div>
    </section>

    <!-- GROWTH -->
<<section class="max-w-4xl mx-auto mt-16 px-8 py-8 bg-white rounded-xl shadow text-center">
    <h2 class="text-2xl font-bold mb-4">Growth & Expansion</h2>

    <ul class="list-disc list-inside space-y-2 text-lg text-left inline-block">
        <li>Expansion of irrigated production areas</li>
        <li>Development of value addition and processing facilities</li>
        <li>Strengthening market linkages and distribution networks</li>
        <li>Strategic partnerships and investment opportunities</li>
        <li>Expansion of agrotourism facilities and programs</li>
    </ul>
</section>
</main> 

@include('footer')

@endsection