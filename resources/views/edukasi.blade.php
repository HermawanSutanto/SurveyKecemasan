<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
    <style>
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%; /* Make sure each slide takes full width */
        }
    
        .swiper-slide > div {
            width: 100%; /* Ensure the content within the slide also takes full width */
        }
    </style>
    
    
</head>
<body class="font-sans bg-white">
    <x-navbar />
    <main id="home" class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <section class="text-center py-12 mx-5 sm:mx-20">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Selamat Datang di Edukasi</h1>
            <p class="text-lg text-gray-600">Eksplorasi berbagai topik untuk meningkatkan pengetahuan Anda. Pelajari lebih dalam tentang berbagai kategori dan artikel populer.</p>
        </section>

        <!-- Category Section -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-12 py-12 px-4 md:px-0 mx-5 sm:mx-20">
            @foreach($edukasis as $edukasi)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $edukasi->gambar) }}" alt="{{ $edukasi->nama }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-3">{{ $edukasi->nama }}</h3>
                    <p class="text-gray-700 mb-4">{{ $edukasi->deskripsi }}</p>
                    <a href="{{ route('edukasi.show', $edukasi->id) }}" class="text-blue-600 hover:underline">Baca Lebih Lanjut</a>
                </div>
            </div>
            @endforeach
        </section>

        <!-- Articles Section -->
        <section class="py-12 bg-gray-100 px-4 md:px-0 mx-5 sm:mx-20">
            <div class="container mx-auto px-4">
                <h2 class="text-center text-3xl font-bold mb-12">Artikel Terbaru</h2>
                <div class="relative swiper">
                    <div class="swiper-wrapper">
                        @foreach($edukasis as $edukasi)
                        <div class="swiper-slide">
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $edukasi->gambar) }}" alt="{{ $edukasi->judul }}" class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-2xl font-semibold mb-3">{{ $edukasi->judul }}</h3>
                                    <p class="text-gray-700 mb-4">{{ $edukasi->ringkasan }}</p>
                                    <a href="{{ route('edukasi.show', $edukasi->id) }}" class="text-blue-600 hover:underline">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                
                    <!-- Swiper Pagination and Navigation -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next swiper-button-custom"></div>
                    <div class="swiper-button-prev swiper-button-custom"></div>
                </div>                
            </div>
        </section>
        
    </main>
    
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            },
        });
    </script>
    
</body>
</html>
