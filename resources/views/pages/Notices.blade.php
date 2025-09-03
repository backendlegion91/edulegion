<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-8">📢 Latest Announcements</h2>

        <ul class="space-y-6">
            @php
                $announcements = [
                    ['date' => '2025-07-01', 'title' => 'Admission for Class 11 Reopens – Apply before July 15', 'link' => '#'],
                    ['date' => '2025-06-28', 'title' => 'Entrance Exam Results Declared – Check your dashboard', 'link' => '#'],
                    ['date' => '2025-06-25', 'title' => 'Orientation for New Students will be held on July 20', 'link' => '#'],
                    ['date' => '2025-06-20', 'title' => 'Final Merit List for B.Com Published', 'link' => '#'],
                ];

                $today = \Carbon\Carbon::today();
            @endphp

            @foreach($announcements as $item)
                @php
                    $date = \Carbon\Carbon::parse($item['date']);
                    $isNew = $date->greaterThanOrEqualTo($today->subDays(7));
                @endphp

                <li class="flex items-start gap-4 bg-blue-50 border-l-4 border-blue-600 p-5 rounded-lg hover:shadow-md transition">
                    
                    <!-- Date Badge -->
                    <div class="flex flex-col items-center justify-center bg-white border border-blue-200 rounded-md px-3 py-1 text-center">
                        <span class="text-sm font-bold text-blue-700">{{ $date->format('M') }}</span>
                        <span class="text-lg font-extrabold text-gray-900 leading-none">{{ $date->format('d') }}</span>
                    </div>

                    <!-- Content -->
                    <div class="flex-1">
                        <a href="{{ $item['link'] }}" class="font-semibold text-gray-900 hover:text-blue-700">
                            {{ $item['title'] }}
                        </a>
                        @if($isNew)
                            <span class="ml-2 px-2 py-0.5 text-xs bg-green-100 text-green-700 rounded-full">NEW</span>
                        @endif
                        <p class="text-xs text-gray-500 mt-1">Posted on {{ $date->format('F d, Y') }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
