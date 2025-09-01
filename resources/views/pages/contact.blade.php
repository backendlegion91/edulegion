@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-700 to-blue-500 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-3">Support & Helpdesk</h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto">
            We're here to help with admissions, courses, and general inquiries.
        </p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white py-4 border-b border-gray-200" aria-label="Breadcrumb">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">Support</li>
        </ol>
    </div>
</nav>

<!-- Contact Info & Form -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 grid md:grid-cols-2 gap-12 items-start">

        <!-- Contact Info -->
        <div class="space-y-6">
            <h2 class="text-3xl font-bold text-blue-900">Get in Touch</h2>
            <p class="text-gray-700">
                Have questions about courses, admissions, or fees? Reach out using the form or contact details below.
            </p>

            <div class="space-y-6">
                <div class="flex items-start space-x-3">
                    <span class="text-blue-600 text-xl"><i class="fas fa-map-marker-alt"></i></span>
                    <div>
                        <h3 class="font-semibold text-blue-700">Address</h3>
                        <p class="text-gray-600">123 University Road, Pune, India</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <span class="text-blue-600 text-xl"><i class="fas fa-phone"></i></span>
                    <div>
                        <h3 class="font-semibold text-blue-700">Phone</h3>
                        <p class="text-gray-600">+91 98765 43210</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <span class="text-blue-600 text-xl"><i class="fas fa-envelope"></i></span>
                    <div>
                        <h3 class="font-semibold text-blue-700">Email</h3>
                        <p class="text-gray-600">admissions@example.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-2xl shadow-md p-8 transition hover:shadow-lg">
            <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                @csrf

                <div class="relative">
                    <input type="text" name="name" id="name" required
                        class="peer w-full px-4 pt-6 pb-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder-transparent"
                        placeholder="Your Name" />
                    <label for="name"
                        class="absolute left-4 top-2 text-sm text-gray-500 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-600">Name</label>
                </div>

                <div class="relative">
                    <input type="email" name="email" id="email" required
                        class="peer w-full px-4 pt-6 pb-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder-transparent"
                        placeholder="Your Email" />
                    <label for="email"
                        class="absolute left-4 top-2 text-sm text-gray-500 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-600">Email</label>
                </div>

                <div class="relative">
                    <textarea name="message" id="message" rows="4" required
                        class="peer w-full px-4 pt-6 pb-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder-transparent"
                        placeholder="Your Message"></textarea>
                    <label for="message"
                        class="absolute left-4 top-2 text-sm text-gray-500 transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-600">Message</label>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="h-64 md:h-96">
    <iframe class="w-full h-full border-0" loading="lazy" allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps?q=University+Road+Pune+India&output=embed">
    </iframe>
</section>

<!-- Optional: Chat Box Placeholder -->
<section class="fixed bottom-5 right-5">
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full shadow-lg flex items-center space-x-2">
        <i class="fas fa-comments"></i>
        <span>Chat Now</span>
    </button>
</section>

@endsection
