<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">📸 Campus Gallery & 🎥 Virtual Tour</h2>

        {{-- Gallery Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1600326146405-2fcabb1b1594?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Main Building" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Main Building Front View</p>
            </div>

            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Library Hall" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Modern Digital Library</p>
            </div>

            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Computer Lab" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Advanced Computer Lab</p>
            </div>

            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1550135811-2f84ae7c1114?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Science Lab" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Science & Research Lab</p>
            </div>

            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Auditorium" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Auditorium & Events Hall</p>
            </div>

            <div class="overflow-hidden rounded-lg shadow hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1606788075761-4564f8d4ed65?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=60" 
                     alt="Campus Playground" class="w-full h-48 object-cover">
                <p class="text-sm text-gray-600 p-2">Playground & Sports Zone</p>
            </div>
        </div>

        {{-- Virtual Campus Tour --}}
        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
            <iframe 
                src="https://www.youtube.com/embed/wt3M3p3v7ug" 
                title="Virtual Campus Tour"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
                class="w-full h-96">
            </iframe>
        </div>
    </div>
</section>
