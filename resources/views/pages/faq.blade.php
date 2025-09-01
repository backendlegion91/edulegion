@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-3">Frequently Asked Questions</h1>
        <p class="text-lg">Quick answers to common admission queries.</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-gray-100 py-3" aria-label="Breadcrumb">
    <div class="container mx-auto px-4">
        <ol class="flex items-center text-sm text-gray-600 space-x-1 md:space-x-3">
            <li>
                <a href="{{ url('/') }}" class="flex items-center hover:text-blue-600">
                    <svg class="w-4 h-4 mr-1 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 3.172l5.657 5.657a1 1 0 01-1.414 1.414L10 6.414l-4.243 4.243a1 1 0 01-1.414-1.414L10 3.172z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7 10l5 5 5-5H7z" />
                    </svg>
                    <span class="text-gray-700 font-medium">FAQ</span>
                </div>
            </li>
        </ol>
    </div>
</nav>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-3xl">
        <h2 class="text-2xl font-bold text-center text-blue-900 mb-10">Frequently Asked Questions</h2>
        <div class="space-y-6" x-data="{ selected: null }">
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

            @foreach ($faqs as $index => $faq)
                <div class="bg-white p-4 rounded-lg shadow" x-data="{ open: false }">
                    <button 
                        class="w-full flex justify-between items-center text-left text-blue-800 font-semibold text-lg focus:outline-none"
                        @click="open = !open"
                        :aria-expanded="open.toString()"
                        type="button"
                    >
                        {{ $faq['question'] }}
                        <svg :class="{ 'rotate-180': open }" class="w-5 h-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition.duration.300ms class="mt-2 text-gray-700 text-sm">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Alpine.js CDN (include only once in your layout) -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@endsection
