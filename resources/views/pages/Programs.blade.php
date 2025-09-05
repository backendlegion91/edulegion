<section class="programs-section py-5 bg-light">
    <div class="container text-center">
        <h2 class="display-5 fw-bold text-dark mb-5">Explore Our Programs</h2>

        <div class="row g-4">
            @foreach([
                ['name' => 'Engineering', 'icon' => '🛠️'],
                ['name' => 'Business', 'icon' => '💼'],
                ['name' => 'Science', 'icon' => '🔬'],
                ['name' => 'Arts', 'icon' => '🎨']
            ] as $prog)
                <div class="col-lg-3 col-md-6">
                    <div class="program-card h-100 p-4 bg-white rounded-4 shadow-sm text-center">
                        <div class="fs-1 mb-3">{{ $prog['icon'] }}</div>
                        <h4 class="fw-bold text-dark mb-2">{{ $prog['name'] }}</h4>
                        <p class="small text-muted mb-0">
                            Cutting-edge curriculum, expert faculty & real-world learning.
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
