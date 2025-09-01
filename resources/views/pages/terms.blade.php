@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold">Terms & Conditions</h1>
        <p class="text-lg mt-2">Please read carefully before using our site or services.</p>
    </div>
</section>

<!-- Breadcrumb -->
<nav class="bg-white border-b border-gray-200 py-4">
    <div class="container mx-auto px-4">
        <ol class="flex items-center space-x-2 text-sm text-gray-600">
            <li><a href="/" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li class="text-blue-800 font-semibold">Terms & Conditions</li>
        </ol>
    </div>
</nav>

<!-- Terms Content Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl text-gray-700 space-y-10 text-base leading-relaxed">

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">1. Acceptance of Terms</h2>
            <p>By accessing or using Edu Legion, you agree to be bound by these Terms & Conditions and our Privacy Policy. If you do not agree, you may not use the site or services.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">2. Eligibility</h2>
            <p>Admission applications are open only to eligible candidates as per the criteria stated in the course details. Providing false information may lead to cancellation of your application or admission.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">3. Use of Website</h2>
            <ul class="list-disc ml-6 space-y-1">
                <li>You may not misuse the platform for illegal or unauthorized purposes.</li>
                <li>You agree not to attempt to gain unauthorized access to any part of the site.</li>
                <li>All content is protected by intellectual property rights owned by Edu Legion.</li>
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">4. Application & Fees</h2>
            <p>Application submissions are considered complete only upon fee payment (if applicable). Fees once paid are non-refundable unless specified otherwise by the admissions policy.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">5. Modifications to Terms</h2>
            <p>Edu Legion reserves the right to modify these Terms at any time. Continued use of the website after updates constitutes your acceptance of the revised terms.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">6. Limitation of Liability</h2>
            <p>Edu Legion is not liable for any direct or indirect damages resulting from the use or inability to use the platform, including delays, errors, or service interruptions.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">7. Governing Law</h2>
            <p>These terms shall be governed by and interpreted in accordance with the laws of India. Disputes shall be subject to the jurisdiction of Pune, Maharashtra.</p>
        </div>

        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">8. Contact Information</h2>
            <p>For any queries regarding these Terms, please contact us:</p>
            <ul class="mt-2 space-y-1">
                <li><strong>Email:</strong> admissions@example.com</li>
                <li><strong>Phone:</strong> +91 98765 43210</li>
            </ul>
        </div>

    </div>
</section>

@endsection
