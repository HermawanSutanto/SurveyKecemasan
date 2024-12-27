<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <x-navbar />
    <main class="container mx-auto my-10 max-w-4xl bg-white shadow-md rounded-lg p-8">
        <h1  class="text-3xl font-semibold text-gray-800 mb-6 text-center">Tambah Berita Baru</h1>
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Judul Berita -->
            <div class="mb-6">
                <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul Berita:</label>
                <input type="text" id="judul" name="judul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan judul berita" required>
            </div>
            
            <!-- Gambar Berita -->
            <div class="mb-6">
                <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar Berita:</label>
                <input type="file" id="gambar" name="gambar" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
            </div>

            <!-- Tanggal Berita -->
            <div class="mb-6">
                <label for="tanggal" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Berita:</label>
                <input type="date" id="tanggal" name="tanggal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            
            <!-- Isi Berita -->
            <div class="mb-6">
                <label for="isi" class="block text-gray-700 text-sm font-bold mb-2">Isi Berita:</label>
                <textarea id="isi" name="isi" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis isi berita" required></textarea>
            </div>
            
            <!-- Penulis -->
            <div class="mb-6">
                <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis:</label>
                <input type="text" id="penulis" name="penulis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nama penulis berita" required>
            </div>
            
            <!-- Referensi Berita -->
            <div class="mb-6">
                <label for="referensi" class="block text-gray-700 text-sm font-bold mb-2">Referensi:</label>
                <input type="text" id="referensi" name="referensi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan referensi berita (opsional)">
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                    Tambah Berita
                </button>
                <a href="/" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                    Kembali ke Beranda
                </a>
            </div>
        </form>
    </main>
    
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
