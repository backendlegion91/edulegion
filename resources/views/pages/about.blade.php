@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">About Edu Legion</h1>
        <p class="lead mx-auto" style="max-width: 720px;">
            Empowering students with quality education, innovation, and excellence since 1995.
        </p>
    </div>
</section>

<!-- Breadcrumbs -->
<nav class="bg-white py-3 border-bottom">
    <div class="container">
        <ol class="breadcrumb mb-0 small">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active fw-semibold text-primary">About</li>
        </ol>
    </div>
</nav>

<!-- History / Overview -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=800&q=80"
                     class="img-fluid rounded-3 shadow" alt="School Campus">
            </div>
            <div class="col-md-6">
                <h2 class="h2 fw-bold text-primary mb-3">Our Legacy</h2>
                <p class="lead text-dark">
                    Edu Legion has been a center of academic excellence for over 25 years. 
                    We offer a wide range of undergraduate, postgraduate, and diploma programs 
                    that are tailored to meet the demands of the modern world.
                </p>
                <p class="text-muted mt-3">
                    Recognized by UGC and accredited with NAAC A+, we continue to innovate 
                    with our industry-aligned curriculum and experienced faculty.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="h2 fw-bold text-primary mb-4">Our Mission & Vision</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h3 class="h5 fw-semibold text-primary mb-2">Our Mission</h3>
                        <p class="text-muted mb-0">
                            To provide high-quality, accessible, and inclusive education 
                            that prepares students to be global citizens and leaders in their fields.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body">
                        <h3 class="h5 fw-semibold text-primary mb-2">Our Vision</h3>
                        <p class="text-muted mb-0">
                            To be a world-class educational institution fostering innovation, 
                            research, and entrepreneurship for a better future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light-blue">
    <div class="container text-center">
        <h2 class="h2 fw-bold text-primary mb-4">At a Glance</h2>
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <h3 class="display-6 fw-bold text-primary">25+</h3>
                <p class="text-muted">Years of Excellence</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="display-6 fw-bold text-primary">150+</h3>
                <p class="text-muted">Expert Faculty</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="display-6 fw-bold text-primary">10,000+</h3>
                <p class="text-muted">Students Enrolled</p>
            </div>
            <div class="col-6 col-md-3">
                <h3 class="display-6 fw-bold text-primary">100%</h3>
                <p class="text-muted">Placement Assistance</p>
            </div>
        </div>
    </div>
</section>

@endsection
