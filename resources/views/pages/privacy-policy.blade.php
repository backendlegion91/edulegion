@extends('layouts.master')

@section('content')

<!-- Hero -->
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Privacy Policy</h1>
        <p class="text-lg mt-2">Effective Date: {{ \Carbon\Carbon::parse('2025-01-01')->format('F d, Y') }}</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white py-4 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <ol class="flex space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">Privacy Policy</li>
        </ol>
    </div>
</nav>

<!-- Policy Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl text-gray-700 leading-relaxed">

        <!-- Table of Contents -->
        <div class="mb-10 p-5 bg-blue-50 rounded-lg shadow-sm">
            <h2 class="text-lg font-semibold text-blue-800 mb-3">📖 Table of Contents</h2>
            <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                <li><a href="#intro" class="hover:text-blue-600">1. Introduction</a></li>
                <li><a href="#info" class="hover:text-blue-600">2. Information We Collect</a></li>
                <li><a href="#use" class="hover:text-blue-600">3. How We Use Your Information</a></li>
                <li><a href="#sharing" class="hover:text-blue-600">4. Sharing Your Data</a></li>
                <li><a href="#security" class="hover:text-blue-600">5. Data Security</a></li>
                <li><a href="#rights" class="hover:text-blue-600">6. Your Rights</a></li>
                <li><a href="#contact" class="hover:text-blue-600">7. Contact Us</a></li>
            </ul>
        </div>

        <!-- Collapsible Policy Sections -->
        <div x-data="{ open: null }" class="space-y-6">

            <div id="intro" class="bg-gray-50 p-5 rounded shadow" x-data="{ show: false }">
                <button @click="show = !show" class="w-full text-left font-semibold text-blue-800 text-lg flex justify-between">
                    1. Introduction
                    <span x-show="!show">➕</span>
                    <span x-show="show">➖</span>
                </button>
                <div x-show="show" class="mt-3 text-gray-700 text-sm">
                    Edu Legion is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information.
                </div>
            </div>

            <div id="info" class="bg-gray-50 p-5 rounded shadow" x-data="{ show: false }">
                <button @click="show = !show" class="w-full text-left font-semibold text-blue-800 text-lg flex justify-between">
                    2. Information We Collect
                    <span x-show="!show">➕</span>
                    <span x-show="show">➖</span>
                </button>
                <div x-show="show" class="mt-3 text-gray-700 text-sm">
                    <ul class="list-disc ml-6 space-y-1">
                        <li>Personal details (name, email, phone, address)</li>
                        <li>Academic details during registration</li>
                        <li>Payment and transaction data</li>
                        <li>Technical data such as IP and browser info</li>
                    </ul>
                </div>
            </div>

            <!-- Repeat for other sections (use, sharing, security, rights, contact) -->

            <div id="contact" class="bg-gray-50 p-5 rounded shadow" x-data="{ show: true }">
                <button @click="show = !show" class="w-full text-left font-semibold text-blue-800 text-lg flex justify-between">
                    7. Contact Us
                    <span x-show="!show">➕</span>
                    <span x-show="show">➖</span>
                </button>
                <div x-show="show" class="mt-3 text-gray-700 text-sm space-y-2">
                    <p>If you have questions about our privacy practices, contact us:</p>
                    <p>📧 <strong>Email:</strong> admissions@example.com</p>
                    <p>📞 <strong>Phone:</strong> +91 98765 43210</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Alpine.js for toggle -->

@endsection
