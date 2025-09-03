@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-white text-center" style="background-color:#2563eb;">
    <div class="container">
        <h1 class="display-5 fw-bold">Explore Our Programs</h1>
        <p class="lead mt-2">From Nursery to Degree Courses – Build Your Future With Us</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white border-bottom py-3" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active fw-semibold text-primary" aria-current="page">Programs</li>
        </ol>
    </div>
</nav>

<!-- Available Grades (Nursery to Class 12) -->
<section class="bg-white py-5 border-bottom">
    <div class="container text-center">
        <h2 class="h4 fw-bold text-primary mb-4">Browse Available Grades</h2>
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Nursery</a>
            @for ($i = 1; $i <= 12; $i++)
                <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Class {{ $i }}</a>
            @endfor
        </div>
    </div>
</section>

<!-- Degree Courses -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="h3 fw-bold text-center text-primary mb-5">Browse Degree Courses</h2>

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

        <div class="row g-4">
            @foreach ($courses as $course)
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h3 class="h5 fw-semibold text-primary">{{ $course['title'] }}</h3>
                            <p class="mb-1 small"><strong>Type:</strong> {{ $course['type'] }}</p>
                            <p class="mb-1 small"><strong>Duration:</strong> {{ $course['duration'] }}</p>
                            <p class="mb-1 small"><strong>Eligibility:</strong> {{ $course['eligibility'] }}</p>
                            <p class="mb-1 small"><strong>Fees:</strong> {{ $course['fees'] }}</p>
                            <p class="text-muted small mt-2">{{ $course['desc'] }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            @guest
                                <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Apply Now</a>
                            @endguest
                            <a href="#" class="text-decoration-none small text-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
