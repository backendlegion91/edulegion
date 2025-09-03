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

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <span class="text-white">Edu</span><span class="text-warning">Legion</span>
            </a>

            <!-- Mobile toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>

                    @guest
                        @if ($now->between($regStart, $regEnd))
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="{{ route('register') }}">
                                    Register
                                    <span class="position-absolute top-100 start-0 translate-middle-y bg-white text-dark small px-2 py-1 rounded shadow d-none d-lg-inline">
                                        Open: {{ $regStart->format('M d') }} – {{ $regEnd->format('M d') }}
                                    </span>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <!-- User Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li class="dropdown-item text-muted small">Role: {{ $role }}</li>
                                <li><a class="dropdown-item" href="{{ $dashboardUrl }}">Dashboard</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
