<section class="bg-white py-20">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12 text-blue-900">Admission Process</h2>

    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-4">
      @php
        $steps = [
          ['icon' => '📝', 'title' => 'Apply Online'],
          ['icon' => '📄', 'title' => 'Submit Documents'],
          ['icon' => '📊', 'title' => 'Merit List & Result'],
          ['icon' => '✅', 'title' => 'Pay Fees & Confirm']
        ];
      @endphp

      @foreach($steps as $index => $step)
        <div class="relative group bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition transform hover:-translate-y-1">
          <!-- Step Number -->
          <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-blue-600 text-white text-sm font-bold w-8 h-8 flex items-center justify-center rounded-full shadow">
            {{ $index + 1 }}
          </div>

          <!-- Icon -->
          <div class="text-4xl mb-4">{{ $step['icon'] }}</div>

          <!-- Title -->
          <h4 class="font-semibold text-lg text-gray-800">{{ $step['title'] }}</h4>
        </div>
      @endforeach
    </div>
  </div>
</section>
