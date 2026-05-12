@extends('layouts.app')

@section('content')

@include('header')
<main class="pt-50 bg-blue-50">

    <!-- HERO -->
    <section 
        class="h-[300px] flex items-center justify-center text-center bg-cover bg-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/images/farm-tour.jpg');">

        <div class="text-white">
            <h1 class="text-4xl font-bold mb-2">Our Services</h1>
            <p class="text-lg">Delivering sustainable agriculture and agribusiness solutions</p>
        </div>
    </section>

     <!-- SERVICES GRID -->
    <section class="max-w-6xl mx-auto px-6 py-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

     <!-- CARD 1 -->
        <div class="bg-white rounded-xl shadow hover:-translate-y-2 transition p-5">
            <div class="slider relative w-full h-40 overflow-hidden rounded-lg mb-4">
                <img src="/images/services/crop/1.jpg" class="slide">
                <img src="/images/services/crop/2.jpg" class="slide">
                <img src="/images/services/crop/3.jpg" class="slide">
                <img src="/images/services/crop/4.jpg" class="slide">

            </div>

            <h3 class="text-green-700 font-semibold mb-2">Commercial Crop Production</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Maize: staple and market supply</li>
                <li>Rice: irrigated paddy and processed varieties</li>
                <li>Vegetables: seasonal and irrigated</li>
                <li>Fruits: selected seasonal crops</li>
            </ul>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white rounded-xl shadow hover:-translate-y-2 transition p-5">
            <div class="slider relative w-full h-40 overflow-hidden rounded-lg mb-4">
                <img src="/images/services/irrigation/1.jpeg" class="slide">
                <img src="/images/services/irrigation/2.jpeg" class="slide">
                <img src="/images/services/irrigation/3.jpeg" class="slide">

            </div>

            <h3 class="text-green-700 font-semibold mb-2">Irrigation & Water Management</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>On-farm dams and water harvesting</li>
                <li>Dry-season irrigation systems</li>
                <li>Efficient water-use techniques</li>
            </ul>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white rounded-xl shadow hover:-translate-y-2 transition p-5">
            <div class="slider relative w-full h-40 overflow-hidden rounded-lg mb-4">
                <img src="/images/services/value/1.jpg" class="slide">
                <img src="/images/services/value/2.jpg" class="slide">
                <img src="/images/services/value/3.jpg" class="slide">
            </div>

            <h3 class="text-green-700 font-semibold mb-2">Value Addition</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Cleaning, grading, and packaging</li>
                <li>Storage to reduce post-harvest losses</li>
                <li>Market-ready preparation</li>
            </ul>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white rounded-xl shadow hover:-translate-y-2 transition p-5">
            <div class="slider relative w-full h-40 overflow-hidden rounded-lg mb-4">
                <img src="/images/services/agribusiness/1.jpg" class="slide">
                <img src="/images/services/agribusiness/2.jpg" class="slide">
                <img src="/images/services/agribusiness/3.jpg" class="slide">
            </div>

            <h3 class="text-green-700 font-semibold mb-2">Agribusiness Partnerships</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Institutional and bulk supply contracts</li>
                <li>Out-grower coordination</li>
                <li>Advisory services</li>
            </ul>
        </div>

        <!-- CARD 5 -->
        <div class="bg-white rounded-xl shadow hover:-translate-y-2 transition p-5">
            <div class="slider relative w-full h-40 overflow-hidden rounded-lg mb-4">
                <img src="/images/services/tourism/1.jpg" class="slide">
               <img src="/images/services/tourism/2.jpg" class="slide">
               <img src="/images/services/tourism/3.jpg" class="slide">
            </div>

            <h3 class="text-green-700 font-semibold mb-2">Agrotourism Experience</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Guided farm tours</li>
                <li>Hands-on farming experience</li>
                <li>Farm-to-table experiences</li>
                <li>Educational programs</li>
                <li>Eco-friendly lodging</li>
            </ul>
        </div>

    </section>
    <script>
document.querySelectorAll('.slider').forEach((slider) => {
    let slides = slider.querySelectorAll('.slide');
    let index = 0;

    // show first slide
    slides[index].classList.remove('hidden');

    setInterval(() => {
        slides[index].classList.add('hidden');
        index = (index + 1) % slides.length;
        slides[index].classList.remove('hidden');
    }, 3000);
});
</script>


</main>

           
@include('footer')

@endsection 