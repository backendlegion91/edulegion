
<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Admission Process</h2>
        <div class="grid md:grid-cols-4 gap-6 text-center">
            @php
                $steps = [
                    ['icon' => '📝', 'title' => 'Apply Online'],
                    ['icon' => '📄', 'title' => 'Submit Documents'],
                    ['icon' => '📊', 'title' => 'Merit List & Result'],
                    ['icon' => '✅', 'title' => 'Pay Fees & Confirm']
                ];
            @endphp
            @foreach($steps as $step)
            <div class="p-6 rounded-lg border hover:border-blue-500 transition">
                <div class="text-4xl mb-3">{{ $step['icon'] }}</div>
                <h4 class="font-semibold text-lg">{{ $step['title'] }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>