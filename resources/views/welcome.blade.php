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
    <main id="home" class="py-8 bg-yellow-300  xl:px-40 md:px-20 h-auto">
        <section class="mb-8 mt-20 h-full text-center xl:text-left px-20 ">
            <div class="grid xl:grid-cols-3 md:justify-items-center xl:justify-items-left container mx-auto">
                <div class="container mx-auto px-2 xl:col-start-1 xl:col-end-3 xl:pr-40  ">
                    <h2 class="text-4xl xl:text-6xl font-bold mb-4 ">Membangun Kondisi Mental yang Sehat</h2>
                    <p class="text-sm xl:text-lg font-normal mb-4 "> Mulai perjalananmu untuk memahami kesehatan mental lebih dalam. Bersama MMHIRCdapatkan wawasan pribadi tentang kondisi mentalmu dan tips untuk lebih tenang, bahagia, dan penuh makna.</p>
                    <div class="xl:flex grid justify-items-center items-center xl:items-start">
                        <button class="outline outline-2 py-1 px-8 text-sm font-semibold rounded-full ">info Selengkapnya</button>
                    </div>
                </div>
                <div class="grid xl:col-start-3  justify-items-center mt-20 xl:mt-0">
                    <img class="w-3/6 rounded-lg xl:w-auto" src="\img\landing_page_photo.png" alt="">
                </div>
            </div>
            
        </section>
    </main>

    <main class=" bg-white md:px-40 h-auto">
        <section id="home" class="mb-8 mt-20 h-full text-center xl:text-left px-20 ">
            <div class="grid xl:grid-row-2 md:justify-items-center xl:justify-items-left container mx-auto ">
                <h2 class="text-4xl xl:text-6xl font-bold mb-4   ">Menciptakan Kehidupan Mental yang Seimbang</h2>

                <div class="grid md:grid-cols-4 mx-auto xl:col-start-1 xl:col-end-3   ">
                    <p class="text-sm md:text-lg font-normal mb-4  md:col-start-1 md:col-end-3 pr-5 ">Kesehatan mental adalah fondasi dari kehidupan yang penuh makna dan kebahagiaan. Menjaga kesehatan mental berarti memahami diri sendiri, menerima kekuatan dan kelemahan, serta mampu menghadapi tantangan hidup dengan bijaksana.</p>
                    <p class="text-sm md:text-lg font-normal mb-4  md:col-start-3 md:col-end-6 pr-5 ">Kami percaya, setiap individu berhak untuk merasa tenang, nyaman, dan bahagia dalam hidupnya. Namun, perjalanan menuju kesehatan mental yang optimal memerlukan kesadaran, usaha, dan dukungan dari diri sendiri maupun orang-orang di sekitar.</p>

                </div>
            </div>
            
        </section>
    </main>
    <main class="">
        <img src="https://satupersen.net/_nuxt/img/illustration-01.fb44c5e.svg" alt="">
    </main>
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>

    
</body>
</html>
