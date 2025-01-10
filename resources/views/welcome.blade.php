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
    <main id="home" class="py-8 xl:px-40 md:px-20 h-auto">
        <section class="mb-8 xl:mt-20 h-full text-center xl:text-left px-4 xl:px-20">
            <div class="grid grid-cols-1 xl:grid-cols-3 md:justify-items-center xl:justify-items-left container mx-auto">
                <!-- Image -->
                <div class="grid xl:col-start-3 justify-items-center mt-10 mb-10 lg:mt-0 order-1 xl:order-2">
                    <img class="w-3/6 xl:w-auto rounded-3xl" src="\img\landing_page_photo.png" alt="">
                </div>
        
                <!-- Text Content -->
                <div class="container mx-auto px-2 xl:col-start-1 xl:col-end-3 xl:pr-40 order-2 xl:order-1">
                    <h2 class="text-4xl xl:text-8xl font-bold mb-4">Jiwa Sehat, Raga Sehat</h2>
                    <p class="text-sm xl:text-xl font-normal mb-4">
                        Mulai perjalananmu untuk memahami kesehatan mental lebih dalam. Ikuti kuis interaktif kami untuk mendapatkan wawasan pribadi tentang kondisi mentalmu dan tips untuk menjaganya.
                    </p>
                    <div class="xl:flex grid justify-items-center items-center xl:items-start">
                        <button class="outline outline-2 py-2 px-10 text-lg font-semibold rounded-full bg-buttonCL">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section id="home" class="mb-40 mt-20 h-full text-center px-20">
            <div class="container mx-auto">
                <!-- Judul -->
                <h2 class="text-4xl xl:text-6xl font-bold mb-8">Menciptakan Kehidupan Mental yang Seimbang</h2>
        
                <!-- Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <img src="\img\landing_page_photo.png" alt="Gambar 1" class="w-full h-40 object-cover rounded-md shadow-lg">
                    <img src="\img\landing_page_photo.png" alt="Gambar 2" class="w-full h-40 object-cover rounded-md shadow-lg">
                    <img src="\img\landing_page_photo.png" alt="Gambar 3" class="w-full h-40 object-cover rounded-md shadow-lg">
                </div>
        
                <!-- Paragraf Teks -->
                <div class="text-sm md:text-lg font-normal text-justify-center space-y-4">
                    <p>Kesehatan mental adalah fondasi dari kehidupan yang penuh makna dan kebahagiaan. Menjaga kesehatan mental berarti memahami diri sendiri, menerima kekuatan dan kelemahan, serta mampu menghadapi tantangan hidup dengan bijaksana.Kami percaya, setiap individu berhak untuk merasa tenang, nyaman, dan bahagia dalam hidupnya. Namun, perjalanan menuju kesehatan mental yang optimal memerlukan kesadaran, usaha, dan dukungan dari diri sendiri maupun orang-orang di sekitar.</p>
                </div>
            </div>
        </section>
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
