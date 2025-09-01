@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-16 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-3">Help & Support</h1>
        <p class="text-lg">Find answers to common questions or reach out for support.</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">Help & Support</li>
        </ol>
    </div>
</nav>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <h2 class="text-3xl font-bold text-center text-blue-900 mb-10">Frequently Asked Questions</h2>

        @php
            $faqs = [
                ['q' => 'When does the admission start?', 'a' => 'Admissions usually start in April and end by June. Check the homepage for current dates.'],
                ['q' => 'How can I apply for a course?', 'a' => 'Click the "Register" button in the menu, fill the admission form, and submit required documents.'],
                ['q' => 'Can I pay my fee online?', 'a' => 'Yes, we support secure payments via Razorpay and Stripe from your student dashboard.'],
                ['q' => 'How will I know if I am selected?', 'a' => 'You will receive an email notification and your status will be updated in the student portal.'],
            ];
        @endphp

        <div class="space-y-6">
            @foreach ($faqs as $index => $faq)
                <div class="bg-blue-50 p-5 rounded-lg shadow hover:shadow-md transition">
                    <h3 class="font-semibold text-blue-800 text-lg">{{ $faq['q'] }}</h3>
                    <p class="text-gray-700 mt-2">{{ $faq['a'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Contact Support CTA -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-blue-800 mb-3">Still have questions?</h2>
        <p class="text-gray-600 mb-6">Reach out to our support team — we’re here to help!</p>
        <a href="/contact" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Contact Support
        </a>
    </div>
</section>

@endsection
