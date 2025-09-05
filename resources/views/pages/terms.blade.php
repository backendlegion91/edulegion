@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-700 to-blue-500 text-white py-16 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold">Terms & Conditions</h1>
        <p class="text-lg mt-2">Effective Date: January 1, 2025</p>
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

<!-- Terms Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl text-gray-700 space-y-10 text-base leading-relaxed">

        <!-- 1 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">1. Acceptance of Terms</h2>
            <p>By accessing and using Edu Legion’s website and services, you agree to comply with these Terms & Conditions. If you do not agree with any part of these terms, you must not use our platform.</p>
        </div>

        <!-- 2 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">2. Eligibility</h2>
            <p>Admissions and applications are open to candidates who meet the eligibility criteria defined for each program. Providing false, incomplete, or misleading information may result in rejection or cancellation of admission.</p>
        </div>

        <!-- 3 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">3. Use of Website</h2>
            <ul class="list-disc ml-6 space-y-1">
                <li>You may use this website only for lawful and educational purposes.</li>
                <li>You agree not to attempt unauthorized access to any part of the system.</li>
                <li>You must not upload malicious code, viruses, or engage in activities that disrupt services.</li>
                <li>All website content, including text, graphics, and branding, is the intellectual property of Edu Legion.</li>
            </ul>
        </div>

        <!-- 4 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">4. Application & Fees</h2>
            <p>Applications are considered valid only upon payment of applicable fees (if required). Fees once paid are generally non-refundable, except as stated in specific admission guidelines or policies.</p>
        </div>

        <!-- 5 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">5. Admissions & Selection</h2>
            <p>Admission to programs is subject to eligibility criteria, merit, and seat availability. Edu Legion reserves the right to modify the admission process or criteria without prior notice.</p>
        </div>

        <!-- 6 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">6. Payments & Refund Policy</h2>
            <p>Payments must be made through the authorized payment gateways provided on our website. Refunds, if applicable, will be processed as per the institution’s refund policy, which may vary by program.</p>
        </div>

        <!-- 7 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">7. Privacy & Data Protection</h2>
            <p>We respect your privacy. Personal data shared during registration or admission will be collected, stored, and used in accordance with our <a href="/privacy-policy" class="text-blue-600 hover:underline">Privacy Policy</a>.</p>
        </div>

        <!-- 8 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">8. User Responsibilities</h2>
            <ul class="list-disc ml-6 space-y-1">
                <li>Provide accurate and up-to-date information during application.</li>
                <li>Maintain confidentiality of login credentials for your student account.</li>
                <li>Use the platform respectfully and avoid harassment or abusive behavior.</li>
            </ul>
        </div>

        <!-- 9 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">9. Limitations of Liability</h2>
            <p>Edu Legion is not liable for any indirect, incidental, or consequential damages arising from the use or inability to use our services, including delays, errors, or system downtime.</p>
        </div>

        <!-- 10 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">10. Modifications to Terms</h2>
            <p>We reserve the right to update or revise these Terms & Conditions at any time. The updated version will be effective immediately upon posting on the website. Continued use of our services implies acceptance of the revised terms.</p>
        </div>

        <!-- 11 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">11. Governing Law & Jurisdiction</h2>
            <p>These Terms shall be governed by the laws of India. Any disputes shall be subject to the exclusive jurisdiction of the courts located in Pune, Maharashtra.</p>
        </div>

        <!-- 12 -->
        <div>
            <h2 class="text-xl font-semibold text-blue-800 mb-2">12. Contact Information</h2>
            <p>If you have questions or concerns about these Terms & Conditions, please contact us at:</p>
            <ul class="mt-2 space-y-1">
                <li><strong>Email:</strong> admissions@example.com</li>
                <li><strong>Phone:</strong> +91 98765 43210</li>
            </ul>
        </div>

    </div>
</section>

@endsection
