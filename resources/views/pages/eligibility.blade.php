@extends('layouts.master')

@section('content')

<!-- Hero -->
<section class="py-5 text-white text-center" style="background: linear-gradient(to right, #1e40af, #3b82f6);">
    <div class="container">
        <h1 class="display-5 fw-bold">Eligibility Check Tool</h1>
        <p class="lead mt-2">Find the right program based on your qualifications</p>
    </div>
</section>

<!-- Eligibility Filter -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h4 fw-bold text-dark mb-3">Select Your Qualification</h2>
            <select id="eligibilityFilter" class="form-select form-select-lg w-auto mx-auto shadow-sm">
                <option value="all">Show All Programs</option>
                <option value="10+2 with Science">10+2 with Science</option>
                <option value="10+2 in any stream">10+2 in any stream</option>
                <option value="10+2 in Commerce or any stream">10+2 in Commerce or any stream</option>
                <option value="10+2 with Biology">10+2 with Biology</option>
            </select>
        </div>

        @php
            $programs = [
                [
                    'title' => 'B.Sc Computer Science',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 with Science',
                    'fees' => '₹40,000/year',
                    'desc' => 'Learn coding, algorithms, and software development.'
                ],
                [
                    'title' => 'B.A English Literature',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 in any stream',
                    'fees' => '₹25,000/year',
                    'desc' => 'Study poetry, fiction, drama and literary criticism.'
                ],
                [
                    'title' => 'B.Com Accounting',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 in Commerce or any stream',
                    'fees' => '₹30,000/year',
                    'desc' => 'Learn financial accounting, auditing and taxation.'
                ],
                [
                    'title' => 'B.Sc Biotechnology',
                    'duration' => '3 Years',
                    'eligibility' => '10+2 with Biology',
                    'fees' => '₹45,000/year',
                    'desc' => 'Focus on molecular biology, genetics, and biochemistry.'
                ],
            ];
        @endphp

        <!-- Program Cards -->
        <div class="row g-4" id="programList">
            @foreach ($programs as $program)
                <div class="col-md-6 program-card" data-eligibility="{{ strtolower($program['eligibility']) }}">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h3 class="h5 fw-bold text-primary">{{ $program['title'] }}</h3>
                                <span class="badge bg-light text-primary border">{{ $program['eligibility'] }}</span>
                            </div>
                            <ul class="list-unstyled small mb-3">
                                <li><strong>Duration:</strong> {{ $program['duration'] }}</li>
                                <li><strong>Fees:</strong> {{ $program['fees'] }}</li>
                                <li><strong>Description:</strong> {{ $program['desc'] }}</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between">
                            @guest
                                <a href="{{ route('register') }}" class="btn btn-sm btn-primary">Apply Now</a>
                            @endguest
                            <a href="#" class="small text-decoration-none text-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JS Filtering -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filter = document.getElementById('eligibilityFilter');
        const cards = document.querySelectorAll('.program-card');

        filter.addEventListener('change', () => {
            const selected = filter.value.toLowerCase();
            cards.forEach(card => {
                const cardEligibility = card.getAttribute('data-eligibility');
                if (selected === 'all' || cardEligibility === selected) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>

@endsection
