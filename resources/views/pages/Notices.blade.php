<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-8">📢 Latest Announcements</h2>

        <ul class="space-y-6">
            @php
                $announcements = [
                    ['date' => '2025-07-01', 'title' => '📌 Admission for Class 11 Reopens – Apply before July 15'],
                    ['date' => '2025-06-28', 'title' => '📌 Entrance Exam Results Declared – Check your dashboard'],
                    ['date' => '2025-06-25', 'title' => '📌 Orientation for New Students will be held on July 20'],
                    ['date' => '2025-06-20', 'title' => '📌 Final Merit List for B.Com Published'],
                ];
            @endphp

            @foreach($announcements as $item)
                <li class="flex items-start gap-3 bg-blue-50 border-l-4 border-blue-600 p-4 rounded-md hover:shadow transition">
                    <div class="text-blue-600 text-xl mt-1">📌</div>
                    <div>
                        <p class="font-semibold text-gray-900">{{ \Carbon\Carbon::parse($item['date'])->format('M d, Y') }}</p>
                        <p class="text-gray-700 text-sm">{{ $item['title'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
