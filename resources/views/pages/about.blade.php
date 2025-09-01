@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Edu Legion</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">Empowering students with quality education, innovation, and excellence since 1995.</p>
    </div>
</section>

<!-- Breadcrumbs -->
<nav class="bg-white py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">About</li>
        </ol>
    </div>
</nav>

<!-- History / Overview -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=80" class="rounded-xl shadow-lg" alt="School Campus">
    <div>
            <h2 class="text-3xl font-semibold text-blue-800 mb-4">Our Legacy</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
            Edu Legion has been a center of academic excellence for over 25 years. We offer a wide range of undergraduate, postgraduate, and diploma programs that are tailored to meet the demands of the modern world.
            </p>
            <p class="text-gray-600 mt-4">
                Recognized by UGC and accredited with NAAC A+, we continue to innovate with our industry-aligned curriculum and experienced faculty.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-blue-800 mb-6">Our Mission & Vision</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Our Mission</h3>
                <p class="text-gray-700">To provide high-quality, accessible, and inclusive education that prepares students to be global citizens and leaders in their fields.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Our Vision</h3>
                <p class="text-gray-700">To be a world-class educational institution fostering innovation, research, and entrepreneurship for a better future.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-blue-50 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-blue-900 mb-8">At a Glance</h2>
        <div class="grid md:grid-cols-4 gap-6">
            <div>
                <h3 class="text-4xl font-bold text-blue-700">25+</h3>
                <p class="text-gray-600">Years of Excellence</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-700">150+</h3>
                <p class="text-gray-600">Expert Faculty</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-700">10,000+</h3>
                <p class="text-gray-600">Students Enrolled</p>
            </div>
            <div>
                <h3 class="text-4xl font-bold text-blue-700">100%</h3>
                <p class="text-gray-600">Placement Assistance</p>
            </div>
        </div>
    </div>
</section>

@endsection
