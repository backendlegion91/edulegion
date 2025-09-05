@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-white text-center" style="background: #2563eb;">
    <div class="container">
        <h1 class="display-5 fw-bold mb-2">Help & Support</h1>
        <p class="lead">Find answers to common questions or reach out for support.</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-light py-2" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Help & Support</li>
        </ol>
    </div>
</nav>

<!-- FAQ Section -->
<section class="py-5 bg-white">
    <div class="container col-lg-8">
        <h2 class="h3 fw-bold text-center text-primary mb-4">Frequently Asked Questions</h2>

        @php
            $faqs = [
                ['q' => 'When does the admission start?', 'a' => 'Admissions usually start in April and end by June. Check the homepage for current dates.'],
                ['q' => 'How can I apply for a course?', 'a' => 'Click the "Register" button in the menu, fill the admission form, and submit required documents.'],
                ['q' => 'Can I pay my fee online?', 'a' => 'Yes, we support secure payments via Razorpay and Stripe from your student dashboard.'],
                ['q' => 'How will I know if I am selected?', 'a' => 'You will receive an email notification and your status will be updated in the student portal.'],
            ];
        @endphp

        <div class="accordion" id="faqAccordion">
            @foreach ($faqs as $index => $faq)
                <div class="accordion-item mb-2">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                            {{ $faq['q'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}"
                         class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                         aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Support CTA -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="h4 fw-bold text-primary mb-2">Still have questions?</h2>
        <p class="text-muted mb-3">Reach out to our support team — we’re here to help!</p>
        <a href="/contact" class="btn btn-primary btn-lg">
            Contact Support
        </a>
    </div>
</section>

@endsection
