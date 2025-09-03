@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-white text-center" style="background: #2563eb;">
    <div class="container">
        <h1 class="display-5 fw-bold mb-2">Frequently Asked Questions</h1>
        <p class="lead">Quick answers to common admission queries.</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-light py-2" aria-label="breadcrumb">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
        </ol>
    </div>
</nav>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container col-lg-8">
        <h2 class="h3 fw-bold text-center text-primary mb-4">Frequently Asked Questions</h2>

        @php
            $faqs = [
                [
                    'question' => 'When does the admission process start?',
                    'answer' => 'The registration window usually opens in April and closes by the end of June. Specific dates are announced on the homepage.'
                ],
                [
                    'question' => 'How do I register for a course?',
                    'answer' => 'Click the "Register" link in the top menu. Fill in the online application form, upload required documents, and submit.'
                ],
                [
                    'question' => 'What documents are required for admission?',
                    'answer' => 'Typically, you need your 10th & 12th mark sheets, ID proof, passport photo, and category certificate (if applicable).'
                ],
                [
                    'question' => 'Is there an entrance exam?',
                    'answer' => 'Some programs require an entrance exam. Check the program details page or contact admissions for clarification.'
                ],
                [
                    'question' => 'Can I pay the fee online?',
                    'answer' => 'Yes, fee payment can be made online via Stripe or Razorpay through your student dashboard.'
                ],
                [
                    'question' => 'What happens after I submit my application?',
                    'answer' => 'You will receive an email confirmation. The admin team will review your application and notify you of the status.'
                ],
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
                            {{ $faq['question'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}" 
                         class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" 
                         aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
