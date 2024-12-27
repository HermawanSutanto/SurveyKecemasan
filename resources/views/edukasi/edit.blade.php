<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Edukasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body class="font-sans bg-gray-100">
    <x-navbar />
    <main class="container mx-auto my-10 max-w-4xl bg-white shadow-md rounded-lg p-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Edit Edukasi</h1>
        <form action="{{ route('edukasi.update', $edukasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Judul Edukasi -->
            <div class="mb-6">
                <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul Edukasi:</label>
                <input type="text" id="judul" name="judul" value="{{ $edukasi->judul }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <!-- Gambar Edukasi -->
            <div class="mb-6">
                <label for="gambar" class="block text-gray-700 text-sm font-bold mb-2">Gambar Edukasi:</label>
                <input type="file" id="gambar" name="gambar" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100">
            </div>

            <!-- Isi Edukasi -->
            <div class="mb-6">
                <label for="isi" class="block text-gray-700 text-sm font-bold mb-2">Isi Edukasi:</label>
                <textarea id="isi" name="isi" rows="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $edukasi->isi }}</textarea>
            </div>

            <!-- Penulis -->
            <div class="mb-6">
                <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis:</label>
                <input type="text" id="penulis" name="penulis" value="{{ $edukasi->penulis }}"class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nama penulis edukasi" required>
            </div>

            <!-- Referensi Edukasi -->
            <div class="mb-6">
                <label for="referensi" class="block text-gray-700 text-sm font-bold mb-2">Referensi:</label>
                <input type="text" id="referensi" name="referensi" value="{{ $edukasi->referensi }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan referensi edukasi (opsional)">
            </div>
            
            <!-- Tombol Submit -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                    Update Edukasi
                </button>
                <a href="{{ route('edukasi.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-600 hover:text-blue-800">
                    Kembali ke Daftar Edukasi
                </a>
            </div>
        </form>
    </main>
</body>
</html>
