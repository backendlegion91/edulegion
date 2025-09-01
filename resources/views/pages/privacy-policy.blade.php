@extends('layouts.master')

@section('content')

<!-- Hero -->
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Privacy Policy</h1>
        <p class="text-lg mt-2">Effective Date: January 1, 2025</p>
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
    <div class="container mx-auto px-4 max-w-4xl text-gray-700 space-y-10 text-base leading-relaxed">

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">1. Introduction</h2>
            <p>Edu Legion is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your personal information when you interact with our website or apply for admissions.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">2. Information We Collect</h2>
            <ul class="list-disc ml-6 space-y-1">
                <li>Personal information (e.g., name, email, phone number, address)</li>
                <li>Academic details submitted during registration</li>
                <li>Payment and transaction details (if applicable)</li>
                <li>Technical data such as browser type, IP address, device info</li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">3. How We Use Your Information</h2>
            <p>We use the collected information to:</p>
            <ul class="list-disc ml-6 space-y-1">
                <li>Process admission applications</li>
                <li>Communicate with you regarding your application or status</li>
                <li>Provide support and respond to queries</li>
                <li>Improve user experience and secure our platform</li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">4. Sharing Your Data</h2>
            <p>We do not sell your personal data. Your data may be shared with trusted third-party services (e.g., payment gateways or email providers) only when necessary and with appropriate safeguards.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">5. Data Security</h2>
            <p>We implement security measures to protect your personal information, including encryption and access control. However, no system is 100% secure, and you share data at your own risk.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">6. Your Rights</h2>
            <p>You have the right to access, correct, or delete your personal data. You may also withdraw consent where applicable by contacting us at the email or phone below.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">7. Contact Us</h2>
            <p>If you have questions or concerns about our privacy practices, please contact:</p>
            <ul class="mt-2 space-y-1">
                <li><strong>Email:</strong> admissions@example.com</li>
                <li><strong>Phone:</strong> +91 98765 43210</li>
            </ul>
        </div>

    </div>
</section>

@endsection
