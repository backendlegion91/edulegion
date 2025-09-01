<section class="relative bg-gradient-to-r from-blue-800 to-indigo-900 text-white py-32 z-10">
    <!-- Background overlay if needed -->
    <div class="absolute inset-0 bg-black/20 z-0"></div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 text-center relative z-10 space-y-10">
        
        <!-- Headline Section -->
        <div class="space-y-4">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
                Empowering Education. <br class="hidden md:inline" />
                Shaping Futures.
            </h1>

            <p class="text-lg md:text-xl max-w-2xl mx-auto text-white/90">
                Admissions now open for 2025 – apply for top programs across disciplines.
            </p>
        </div>

        <!-- Call to Action / Registration Button -->
        @if (!auth()->check())
            <div class="space-y-3">
                @if ($now->between($regStart, $regEnd))
                    <a href="{{ url('/register') }}"
                       class="inline-flex items-center justify-center bg-yellow-400 text-blue-900 font-semibold text-base px-8 py-3 rounded-lg shadow-md hover:bg-yellow-300 transition duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                        Apply Now
                    </a>

                    <p class="text-sm text-white/80">
                        Open: {{ $regStart->format('M d') }} – {{ $regEnd->format('M d') }}
                    </p>
                @else
                    <span class="inline-block bg-white/90 text-gray-800 text-sm font-medium px-6 py-2 rounded-lg">
                        Admissions Closed
                    </span>
                @endif
            </div>
        @endif

    </div>
</section>
