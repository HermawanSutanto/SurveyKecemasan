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
            <div class="container mx-auto">
                <h2 class="text-3xl font-semibold text-gray-600 mb-8">Tes Kesehatan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Kartu 1 -->
                    <div class="bg-white shadow-md rounded-lg flex flex-col justify-between h-full">
                        <img src="https://nos.wjv-1.neo.id/strapi-prod/Tes_Level_Kurikulum_1f82fc466d.png" alt="Kartu 1" class="rounded-t-lg mb-4">
                        <div class="flex-grow px-4">
                            <h3 class="font-semibold text-center mb-2">Self-Reporting Questionnaire (SRQ-20)</h3>
                            <p class="text-center text-gray-700 mb-4">Deskripsi kartu 1 untuk tes psikologi.</p>
                        </div>
                        <div class="text-center mb-4">
                            <a href="{{ route('opsi.index', ['test' => 'SRQ']) }}">
                                <button class="w-full md:w-auto px-10 py-2 bg-yellow-300 text-sm font-normal rounded-full transition-all duration-300 hover:bg-yellow-400 hover:shadow-lg">
                                    Ikuti Tes
                                </button>
                            </a>
                        </div>
                    </div>
    
                    <!-- Kartu 2 -->
                    <div class="bg-white shadow-md rounded-lg flex flex-col justify-between h-full">
                        <img src="https://nos.wjv-1.neo.id/strapi-prod/Tes_Level_Kurikulum_1f82fc466d.png" alt="Kartu 2" class="rounded-t-lg mb-4">
                        <div class="flex-grow px-4">
                            <h3 class="font-semibold text-center mb-2">BIG FIVE INVENTORY-10 (BFI-10)</h3>
                            <p class="text-center text-gray-700 mb-4">Deskripsi kartu 2 untuk tes psikologi.</p>
                        </div>
                        <div class="text-center mb-4">
                            <a href="{{ route('opsi.index', ['test' => 'BFI']) }}">
                                <button class="w-full md:w-auto px-10 py-2 bg-yellow-300 text-sm font-normal rounded-full transition-all duration-300 hover:bg-yellow-400 hover:shadow-lg">
                                    Ikuti Tes
                                </button>
                            </a>
                        </div>
                    </div>
    
                    <!-- Kartu 3 -->
                    <div class="bg-white shadow-md rounded-lg flex flex-col justify-between h-full">
                        <img src="https://nos.wjv-1.neo.id/strapi-prod/Tes_Level_Kurikulum_1f82fc466d.png" alt="Kartu 3" class="rounded-t-lg mb-4">
                        <div class="flex-grow px-4">
                            <h3 class="font-semibold text-center mb-2">SMARTPHONE ADDICTION SCALE-SHORT VERSION
                                (SAS-SV)
                                </h3>
                            <p class="text-center text-gray-700 mb-4">Deskripsi kartu 3 untuk tes psikologi.</p>
                        </div>
                        <div class="text-center mb-4">
                            <a href="{{ route('opsi.index', ['test' => 'SAS']) }}">
                                <button class="w-full md:w-auto px-10 py-2 bg-yellow-300 text-sm font-normal rounded-full transition-all duration-300 hover:bg-yellow-400 hover:shadow-lg">
                                    Ikuti Tes
                                </button>
                            </a>
                        </div>
                    </div>
    
                    <!-- Kartu 4 -->
                    <div class="bg-white shadow-md rounded-lg flex flex-col justify-between h-full">
                        <img src="https://nos.wjv-1.neo.id/strapi-prod/Tes_Level_Kurikulum_1f82fc466d.png" alt="Kartu 4" class="rounded-t-lg mb-4">
                        <div class="flex-grow px-4">
                            <h3 class="font-semibold text-center mb-2">Strengths and Difficulties Questionnaire (SDQ)</h3>
                            <p class="text-center text-gray-700 mb-4">Deskripsi kartu 4 untuk tes psikologi.</p>
                        </div>
                        <div class="text-center mb-4">
                            <a href="{{ route('opsi.index', ['test' => 'SDQ']) }}">
                                <button class="w-full md:w-auto px-10 py-2 bg-yellow-300 text-sm font-normal rounded-full transition-all duration-300 hover:bg-yellow-400 hover:shadow-lg">
                                    Ikuti Tes
                                </button>
                            </a>
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
