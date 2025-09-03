@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-white bg-gradient" style="background: linear-gradient(to right, #1e40af, #3b82f6);">
    <div class="container text-center">
        <h1 class="display-5 fw-bold mb-3">Support & Helpdesk</h1>
        <p class="lead mx-auto" style="max-width: 720px;">
            We're here to help with admissions, courses, and general inquiries.
        </p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white border-bottom py-3" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page">Support</li>
        </ol>
    </div>
</nav>

<!-- Contact Info & Form -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-start">
            
            <!-- Contact Info -->
            <div class="col-md-6">
                <h2 class="h3 fw-bold text-primary">Get in Touch</h2>
                <p class="text-muted">
                    Have questions about courses, admissions, or fees? Reach out using the form or contact details below.
                </p>

                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-map-marker-alt fa-lg text-primary me-3"></i>
                    <div>
                        <h6 class="fw-semibold text-primary mb-1">Address</h6>
                        <p class="text-muted mb-0">123 University Road, Pune, India</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-phone fa-lg text-primary me-3"></i>
                    <div>
                        <h6 class="fw-semibold text-primary mb-1">Phone</h6>
                        <p class="text-muted mb-0">+91 98765 43210</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <i class="fas fa-envelope fa-lg text-primary me-3"></i>
                    <div>
                        <h6 class="fw-semibold text-primary mb-1">Email</h6>
                        <p class="text-muted mb-0">admissions@example.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Google Map -->
<section style="height: 400px;">
    <iframe class="w-100 h-100 border-0" loading="lazy" allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps?q=University+Road+Pune+India&output=embed">
    </iframe>
</section>

<!-- Chat Button -->
<section class="position-fixed bottom-0 end-0 m-4">
    <button class="btn btn-primary rounded-pill shadow d-flex align-items-center px-3 py-2">
        <i class="fas fa-comments me-2"></i> Chat Now
    </button>
</section>

@endsection
