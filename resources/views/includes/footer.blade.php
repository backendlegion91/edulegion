<footer class="footer-custom text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            
            <!-- Logo & Tagline -->
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('/') }}" class="d-inline-flex align-items-center fs-4 fw-bold text-decoration-none mb-2">
                    <span class="text-white">Edu</span><span class="text-warning">Legion</span>
                </a>
                <p class="small text-light">
                    Building careers since 1995. <br class="d-md-none" />
                    NAAC A+ Accredited.
                </p>
            </div>

            <!-- Menu -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-semibold mb-3">Menu</h5>
                <ul class="list-unstyled small">
                    <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ url('/courses') }}" class="footer-link">Programs</a></li>
                    <li><a href="{{ url('/contact') }}" class="footer-link">Contact</a></li>
                    <li><a href="{{ url('/help') }}" class="footer-link">Help</a></li>
                    <li><a href="{{ url('/eligibility') }}" class="footer-link">Eligibility</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-semibold mb-3">Quick Links</h5>
                <ul class="list-unstyled small">
                    <li><a href="{{ url('/faq') }}" class="footer-link">FAQ</a></li>
                    <li><a href="{{ url('/about') }}" class="footer-link">About Us</a></li>
                    <li><a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}" class="footer-link">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-semibold mb-3">Contact</h5>
                <ul class="list-unstyled small">
                    <li><address class="mb-1">123 University Rd, Pune, India</address></li>
                    <li>Email: <a href="mailto:admissions@example.com" class="footer-link">admissions@example.com</a></li>
                    <li>Phone: <a href="tel:+919876543210" class="footer-link">+91 98765 43210</a></li>
                </ul>
            </div>

        </div>

        <div class="text-center small text-secondary mt-4">
            &copy; {{ date('Y') }} EduLegion. All rights reserved.
        </div>
    </div>
</footer>