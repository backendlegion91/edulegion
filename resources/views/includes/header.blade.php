@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Auth;

    $regStart = Carbon::parse(config('app.registration_start'));
    $regEnd = Carbon::parse(config('app.registration_end'));
    $now = Carbon::now();

    $role = 'student';
    $dashboardUrl = route('student.dashboard');

    if (Auth::check() && method_exists(Auth::user(), 'getRoleNames')) {
        $role = Auth::user()->getRoleNames()->first();
        $dashboardUrl = match($role) {
            'admin' => route('admin.dashboard'),
            'staff' => route('staff.dashboard'),
            default => route('student.dashboard'),
        };
    }
@endphp

<header class="bg-gradient-to-r from-blue-700 to-blue-500 text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center text-2xl font-bold tracking-wide hover:scale-105 transition-transform duration-200 w-1/3 md:w-auto">
            <span class="text-white">Edu</span><span class="text-yellow-300">Legion</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6 font-medium">
            <a href="{{ url('/') }}" class="hover:text-yellow-300 transition">Home</a>
            <a href="{{ url('/courses') }}" class="hover:text-yellow-300 transition">Courses</a>
            <a href="{{ url('/about') }}" class="hover:text-yellow-300 transition">About</a>
            <a href="{{ url('/contact') }}" class="hover:text-yellow-300 transition">Contact</a>

            @guest
                @if ($now->between($regStart, $regEnd))
                    <a href="{{ route('register') }}" class="hover:text-yellow-300 relative group transition">
                        Register
                        <span class="absolute -bottom-6 left-0 bg-white text-gray-800 text-xs rounded px-2 py-1 shadow-md opacity-0 group-hover:opacity-100 transition whitespace-nowrap z-10">
                            Open: {{ $regStart->format('M d') }} – {{ $regEnd->format('M d') }}
                        </span>
                    </a>
                @endif
                <a href="{{ route('login') }}" class="hover:text-yellow-300 transition">Login</a>
            @else
                <!-- User Dropdown -->
                <div x-data="{ open: false }" class="relative" @click.away="open = false">
                    <button @click="open = !open" class="hover:text-yellow-300 transition focus:outline-none" aria-haspopup="true" aria-expanded="open">
                        {{ Auth::user()->name }}
                    </button>
                    <div x-show="open" x-transition class="absolute right-0 mt-2 w-48 bg-white text-black rounded shadow-lg z-50">
                        <div class="px-4 py-2 text-sm text-gray-600 border-b capitalize">
                            Role: {{ $role }}
                        </div>
                        <a href="{{ $dashboardUrl }}" class="block px-4 py-2 hover:bg-gray-100 text-sm">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 text-sm">Logout</button>
                        </form>
                    </div>
                </div>
            @endguest
        </nav>

        <!-- Mobile Hamburger -->
        <button id="menuToggle" class="md:hidden focus:outline-none text-white hover:text-yellow-300 transition" aria-label="Toggle menu">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden px-4 pb-4 bg-blue-600 border-t border-white/20 space-y-2">
        <a href="{{ url('/') }}" class="block py-2 border-b border-white/20 hover:text-yellow-300">Home</a>
        <a href="{{ url('/courses') }}" class="block py-2 border-b border-white/20 hover:text-yellow-300">Courses</a>
        <a href="{{ url('/about') }}" class="block py-2 border-b border-white/20 hover:text-yellow-300">About</a>
        <a href="{{ url('/contact') }}" class="block py-2 border-b border-white/20 hover:text-yellow-300">Contact</a>

        @guest
            @if ($now->between($regStart, $regEnd))
                <a href="{{ route('register') }}" class="block py-2 hover:text-yellow-300">
                    Register
                    <span class="block text-xs text-white/70">Open: {{ $regStart->format('M d') }} – {{ $regEnd->format('M d') }}</span>
                </a>
            @endif
            <a href="{{ route('login') }}" class="block py-2 border-b border-white/20 hover:text-yellow-300">Login</a>
        @else
            <a href="{{ $dashboardUrl }}" class="block py-2 hover:text-yellow-300">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left py-2 hover:text-yellow-300">Logout</button>
            </form>
        @endguest
    </div>
</header>

<!-- Scripts -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menuToggle');
        const menu = document.getElementById('mobileMenu');

        if (toggle && menu) {
            toggle.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
