<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-white">
    <x-navbar />
    <main id="home" class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <section class="bg-white py-12 mx-5 sm:mx-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold text-gray-600 mb-8">Berita Terkini</h2>
                <!-- Swiper -->
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($beritas as $berita)
                        <div class="swiper-slide flex justify-center items-center">
                            <div class="bg-gray-100 p-6 rounded-lg shadow-md w-full max-w-xs">
                                @if($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full mb-4 rounded-lg h-40 object-cover">
                                @endif
                                <h3 class="text-xl font-semibold mb-2">{{ $berita->judul }}</h3>
                                <p class="text-gray-700">{{ Str::limit($berita->isi, 100) }}</p>
                                <a href="{{ route('berita.show', $berita->id) }}" class="text-blue-600 hover:underline mt-4 block">Read More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- Swiper End -->
            </div>
        </section>

        <!-- Latest News Section -->
        <section class="bg-gray-100 py-12 mx-5 sm:mx-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Berita Viral</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($beritas as $berita)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        @if($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full mb-4 rounded-lg">
                        @endif
                        <h3 class="text-xl font-semibold mb-2">{{ $berita->judul }}</h3>
                        <p class="text-gray-700">{{ Str::limit($berita->isi, 100) }}</p>
                        <a href="{{ route('berita.show', $berita->id) }}" class="text-blue-600 hover:underline mt-4 block">Read More</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3, // Display 3 articles at a time
            spaceBetween: 20, // Adjust spacing between slides
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1, // 1 slide on small screens
                },
                768: {
                    slidesPerView: 2, // 2 slides on medium screens
                },
                1024: {
                    slidesPerView: 3, // 3 slides on large screens
                },
            },
        });
    </script>
</body>
</html>
