@extends('layouts.master')

@section('content')

<!-- Hero -->
<section class="bg-gradient-to-r from-blue-700 to-blue-500 text-white py-20 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold">Eligibility Check Tool</h1>
        <p class="text-lg md:text-xl mt-4 text-blue-100">Find the right program based on your qualifications</p>
    </div>
</section>

<!-- Eligibility Filter -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-xl mx-auto text-center mb-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-3">Select Your Qualification</h2>
            <select id="eligibilityFilter" class="w-full md:w-2/3 mx-auto border border-gray-300 rounded-full px-5 py-3 text-gray-700 text-sm shadow-sm focus:ring focus:ring-blue-200">
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
        <div class="grid md:grid-cols-2 gap-10" id="programList">
            @foreach ($programs as $program)
                <div class="program-card bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition-all duration-300" data-eligibility="{{ strtolower($program['eligibility']) }}">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-semibold text-blue-700">{{ $program['title'] }}</h3>
                        <span class="text-xs bg-blue-100 text-blue-700 px-3 py-1 rounded-full capitalize">{{ $program['eligibility'] }}</span>
                    </div>

                    <ul class="text-sm text-gray-700 mb-4 space-y-1">
                        <li><strong>Duration:</strong> {{ $program['duration'] }}</li>
                        <li><strong>Fees:</strong> {{ $program['fees'] }}</li>
                        <li><strong>Description:</strong> {{ $program['desc'] }}</li>
                    </ul>

                    <div class="mt-4 flex justify-between items-center">
                        @guest
                            <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-full hover:bg-blue-700 transition">Apply Now</a>
                        @endguest
                        <a href="#" class="text-sm text-blue-600 hover:underline">View Details</a>
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
                    card.classList.remove('hidden');
                    card.classList.add('block');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
</script>

@endsection
