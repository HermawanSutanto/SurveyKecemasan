<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-white">
    <x-navbar />
    <main id="home" class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <section class="mb-8 mt-10 h-full text-center xl:text-left px-5 sm:px-20">
            <div class="container mx-auto flex items-center justify-between">
                <x-back-button />
                <h2 class="text-3xl font-semibold text-gray-600 mb-8">Tes Psikologi</h2>
                @auth
                    <a href="{{ route('rekap.showriwayat', ['test' => $test]) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        Riwayat
                    </a>
                @endauth
            </div>
            
            <section class="bg-white mx-5 sm:mx-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Card 1 -->
                    <div 
                        onclick="window.location.href='{{ route('tesperawat.index', ['test' => $test]) }}'" 
                        class="relative bg-gray-100 rounded-lg shadow-md overflow-hidden group cursor-pointer">
                        <img src="https://via.placeholder.com/600x400" alt="Featured Image 1" class="w-full h-full object-cover absolute inset-0 z-0 transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="relative z-10 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Untuk Perawat</h3>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula ligula at diam luctus laoreet.</p>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div 
                        onclick="window.location.href='{{ route('tesumum.index', ['test' => $test]) }}'" 
                        class="relative bg-gray-100 rounded-lg shadow-md overflow-hidden group cursor-pointer">
                        <img src="https://via.placeholder.com/600x400" alt="Featured Image 2" class="w-full h-full object-cover absolute inset-0 z-0 transition-transform duration-300 ease-in-out group-hover:scale-105">
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                        <div class="relative z-10 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Untuk Umum</h3>
                            <p class="text-white">Nullam tristique felis eget sem viverra, non dictum est luctus. Sed tincidunt erat vel felis vehicula.</p>
                        </div>
                    </div>
                </div>
            </section>
            
    </main>
 
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
