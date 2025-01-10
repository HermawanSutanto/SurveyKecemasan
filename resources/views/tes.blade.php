<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gradient-to-b from-coklat_muda via-orange-300 to-coklat_muda">
    <x-navbar />
    <main id="home" class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <section class="mb-8 mt-10 h-full text-center xl:text-left px-5 sm:px-20">
            <div class="container mx-auto">
                <div class="container mx-auto flex items-center justify-between mb-8">
                    <h2 class="text-3xl font-semibold text-black-600">Eksplorasi Kesehatan Mental Anda</h2>
                    <a href="" class="text-blue-500 hover:underline">Tes Lainnya</a>
                </div>                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Kartu 1 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'SRQ']) }}'">
                        <img src="\img\SRQ.png" alt="Kartu 1" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Evaluasi kondisi kesehatan mental Anda secara umum.</p>
                        </div>
                    </div>
                
                    <!-- Kartu 2 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'BFI']) }}'">
                        <img src="\img\The Big-5.png" alt="Kartu 2" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Kenali kepribadian Anda berdasarkan teori The Big 5 melalui tes ini.</p>
                        </div>
                    </div>
                
                    <!-- Kartu 3 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'SAS']) }}'">
                        <img src="\img\Phone Addict.png" alt="Kartu 3" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Tes untuk mengetahui tingkat kecanduan Anda terhadap smarphone.</p>
                        </div>
                    </div>
                
                    <!-- Kartu 4 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'SDQ']) }}'">
                        <img src="\img\Kekuatan Individu.png" alt="Kartu 4" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Temukan kekuatan, kelemahan, dan potensi diri Anda melalui tes ini.</p>
                        </div>
                    </div>
                    <!-- Kartu 5 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'SDQ']) }}'">
                        <img src="\img\Academic Stress.png" alt="Kartu 4" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Ukur tingkat stres akademik yang Anda alami saat ini.</p>
                        </div>
                    </div>
                    <!-- Kartu 6 -->
                    <div class="bg-white shadow-md rounded-xl flex flex-col justify-between h-full cursor-pointer" onclick="window.location.href='{{ route('opsi.index', ['test' => 'SDQ']) }}'">
                        <img src="\img\Keharmonisan Keluarga.png" alt="Kartu 4" class="rounded-xl mb-4 w-full h-40 object-cover pt-2 px-2">
                        <div class="px-4 mb-4">
                            <p class="text-center text-gray-700">Evaluasi tingkat keharmonisan dalam keluarga Anda.</p>
                        </div>
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
