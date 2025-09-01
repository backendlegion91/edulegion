<footer class="bg-blue-900 text-white pt-12 pb-6">
    <div class="container mx-auto px-4 grid gap-10 md:grid-cols-2 lg:grid-cols-4">
        
        <!-- Logo & Tagline -->
        <div>
            <a href="{{ url('/') }}" class="flex items-center text-2xl font-bold tracking-wide hover:scale-105 transition-transform duration-200">
                <span class="text-white">Edu</span><span class="text-yellow-300">Legion</span>
            </a>
            <p class="text-sm text-gray-200 mt-3 leading-relaxed">
                Building careers since 1995. <br class="block md:hidden" />
                NAAC A+ Accredited.
            </p>
        </div>

        <!-- Menu -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Menu</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/courses') }}" class="hover:underline">Programs</a></li>
                <li><a href="{{ url('/contact') }}" class="hover:underline">Contact</a></li>
                <li><a href="{{ url('/help') }}" class="hover:underline">Help</a></li>
                <li><a href="{{ url('/eligibility') }}" class="hover:underline">Eligibility</a></li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="{{ url('/faq') }}" class="hover:underline">FAQ</a></li>
                <li><a href="{{ url('/about') }}" class="hover:underline">About Us</a></li>
                <li><a href="{{ url('/privacy-policy') }}" class="hover:underline">Privacy Policy</a></li>
                <li><a href="{{ url('/terms') }}" class="hover:underline">Terms & Conditions</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="font-semibold text-lg mb-4">Contact</h4>
            <ul class="space-y-2 text-sm text-gray-300">
                <li>
                    <address class="not-italic">123 University Rd, Pune, India</address>
                </li>
                <li>
                    Email: <a href="mailto:admissions@example.com" class="hover:underline">admissions@example.com</a>
                </li>
                <li>
                    Phone: <a href="tel:+919876543210" class="hover:underline">+91 98765 43210</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="text-center text-sm text-gray-400 mt-10">
        &copy; {{ date('Y') }} EduLegion. All rights reserved.
    </div>
</footer>
