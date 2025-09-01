<section class="bg-gray-100 py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-12">Explore Our Programs</h2>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            @foreach([
                ['name' => 'Engineering', 'icon' => '🛠️'],
                ['name' => 'Business', 'icon' => '💼'],
                ['name' => 'Science', 'icon' => '🔬'],
                ['name' => 'Arts', 'icon' => '🎨']
            ] as $prog)
            <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                <div class="text-6xl mb-4">{{ $prog['icon'] }}</div>
                <h4 class="text-xl font-bold text-gray-800 mb-2">{{ $prog['name'] }}</h4>
                <p class="text-sm text-gray-600 leading-relaxed">
                    Cutting-edge curriculum, expert faculty & real-world learning.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

