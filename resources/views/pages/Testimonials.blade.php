<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Testimonial Section -->
<section class="py-20 bg-gray-50" aria-labelledby="testimonial-heading">
  <div class="container mx-auto px-4">
    <h2 id="testimonial-heading" class="text-4xl font-extrabold text-center text-blue-900 mb-12">
      What Our Students Say
    </h2>

    <div class="swiper w-full max-w-4xl mx-auto">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide bg-white p-8 sm:p-10 rounded-2xl shadow-lg relative">
          <div class="absolute -top-6 left-6 text-5xl text-blue-200">“</div>
          <p class="text-lg text-gray-700 text-center leading-relaxed italic">
            Edu Legion made the admission journey easy. The faculty and placements are top-notch.
          </p>
          <div class="mt-6 text-center">
            <p class="font-semibold text-blue-700">Aditi Sharma</p>
            <p class="text-sm text-gray-500">B.Tech in Computer Science</p>
          </div>
          <div class="absolute -bottom-6 right-6 text-5xl text-blue-200 rotate-180">“</div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide bg-white p-8 sm:p-10 rounded-2xl shadow-lg relative">
          <div class="absolute -top-6 left-6 text-5xl text-blue-200">“</div>
          <p class="text-lg text-gray-700 text-center leading-relaxed italic">
            The campus life is vibrant and supportive. I've grown so much here!
          </p>
          <div class="mt-6 text-center">
            <p class="font-semibold text-blue-700">Rahul Verma</p>
            <p class="text-sm text-gray-500">MBA, Class of 2024</p>
          </div>
          <div class="absolute -bottom-6 right-6 text-5xl text-blue-200 rotate-180">“</div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide bg-white p-8 sm:p-10 rounded-2xl shadow-lg relative">
          <div class="absolute -top-6 left-6 text-5xl text-blue-200">“</div>
          <p class="text-lg text-gray-700 text-center leading-relaxed italic">
            Thanks to Edu Legion, I received multiple placement offers before graduation!
          </p>
          <div class="mt-6 text-center">
            <p class="font-semibold text-blue-700">Sneha Kulkarni</p>
            <p class="text-sm text-gray-500">BBA, Batch of 2023</p>
          </div>
          <div class="absolute -bottom-6 right-6 text-5xl text-blue-200 rotate-180">“</div>
        </div>

      </div>

      <!-- Pagination -->
      <div class="swiper-pagination mt-6"></div>

      <!-- Navigation -->
      <div class="swiper-button-prev text-blue-600"></div>
      <div class="swiper-button-next text-blue-600"></div>
    </div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'slide',
      speed: 600,
      breakpoints: {
        640: { slidesPerView: 1 },
        1024: { slidesPerView: 2, spaceBetween: 30 },
      },
    });
  });
</script>
