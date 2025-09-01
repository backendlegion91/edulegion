@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-16 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">Explore Our Programs</h1>
        <p class="text-lg mt-2">From Nursery to Degree Courses – Build Your Future With Us</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">Programs</li>
        </ol>
    </div>
</nav>

<!-- Available Grades (Nursery to Class 12) -->
<section class="bg-white py-16 border-b">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center">Browse Available Grades</h2>
        <div class="flex flex-wrap justify-center gap-3">
            <a href="#" class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">Nursery</a>
            @for ($i = 1; $i <= 12; $i++)
                <a href="#" class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">Class {{ $i }}</a>
            @endfor
        </div>
    </div>
</section>

<!-- Degree Courses -->
<section class="bg-blue-50 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-blue-900 text-center mb-10">Browse Degree Courses</h2>

        @php
            $courses = [
                [
                    'title' => 'B.Sc Computer Science',
                    'type' => 'Undergraduate',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 with Science',
                    'fees' => '₹40,000/year',
                    'desc' => 'Focus on algorithms, data structures, and software engineering.'
                ],
                [
                    'title' => 'B.A. English Literature',
                    'type' => 'Undergraduate',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 in any stream',
                    'fees' => '₹25,000/year',
                    'desc' => 'Study of classical and modern English literature, critical theory.'
                ],
                [
                    'title' => 'B.Com Accounting & Finance',
                    'type' => 'Undergraduate',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 in Commerce or any stream',
                    'fees' => '₹30,000/year',
                    'desc' => 'Covers financial accounting, taxation, and business law.'
                ],
                [
                    'title' => 'B.Sc Biotechnology',
                    'type' => 'Undergraduate',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 with Biology',
                    'fees' => '₹45,000/year',
                    'desc' => 'Focus on genetics, microbiology, and molecular biology.'
                ],
            ];
        @endphp

        <div class="grid md:grid-cols-2 gap-8">
            @foreach ($courses as $course)
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-blue-800 mb-2">{{ $course['title'] }}</h3>
                    <p class="text-gray-700 text-sm mb-1"><strong>Type:</strong> {{ $course['type'] }}</p>
                    <p class="text-gray-700 text-sm mb-1"><strong>Duration:</strong> {{ $course['duration'] }}</p>
                    <p class="text-gray-700 text-sm mb-1"><strong>Eligibility:</strong> {{ $course['eligibility'] }}</p>
                    <p class="text-gray-700 text-sm mb-1"><strong>Fees:</strong> {{ $course['fees'] }}</p>
                    <p class="text-gray-600 text-sm mt-3">{{ $course['desc'] }}</p>

                    <div class="mt-4 flex justify-between items-center">
    @guest
        <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
            Apply Now
        </a>
    @endguest

    <a href="#" class="text-sm text-blue-600 hover:underline">View Details</a>
</div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
