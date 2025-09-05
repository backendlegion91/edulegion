<section class="hero-section text-white py-5 position-relative">
    <!-- Background Overlay -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div class="container text-center position-relative z-1">
        
        <!-- Headline -->
        <div class="mb-4">
            <h1 class="display-4 fw-bold">
                Empowering Education. <br class="d-none d-md-inline" />
                Shaping Futures.
            </h1>
            <p class="lead mx-auto text-light opacity-90" style="max-width: 700px;">
                Admissions now open for 2025 – apply for top programs across disciplines.
            </p>
        </div>

        <!-- Call to Action -->
        @if (!auth()->check())
            <div class="mt-4">
                @if ($now->between($regStart, $regEnd))
                    <a href="{{ url('/register') }}" class="btn btn-warning btn-lg fw-semibold px-4 shadow">
                        Apply Now
                    </a>
                    <p class="small text-light mt-2">
                        Open: {{ $regStart->format('M d') }} – {{ $regEnd->format('M d') }}
                    </p>
                @else
                    <span class="badge bg-light text-dark fs-6 px-3 py-2">
                        Admissions Closed
                    </span>
                @endif
            </div>
        @endif

    </div>
</section>
