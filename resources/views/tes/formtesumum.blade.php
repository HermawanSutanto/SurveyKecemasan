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
                <x-back-button />
                <h2 class="text-3xl font-semibold text-gray-600 mb-8">Data Diri</h2>
            </div>
            <section class="bg-white mx-5 sm:mx-10 p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Form Data Diri Pelaksana Tes Psikologi</h2>
                <form action="{{ route('pelaksana.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf                    
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="nama_lengkap" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <!-- Alamat -->
                    <div class="md:col-span-2">
                        <label for="alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
                        <textarea id="alamat" name="alamat" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <!-- Catatan -->
                    <div>
                        <label for="catatan" class="block text-gray-700 font-medium mb-2">Catatan</label>
                        <input type="text" id="catatan" name="catatan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    {{-- jenis tes --}}
                    <div>
                        <input type="hidden" id="jenistes" name="jenistes" value="{{ $test }}">
                    </div>
                    <!-- Tombol Submit -->
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-blue-500 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Kirim
                        </button>
                    </div>
                </form>
            </section>
            
        </section>
    </main>
 
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
