<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <x-navbar />
    <main class="container mx-auto my-10 max-w-4xl bg-white shadow-md rounded-lg p-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-4 text-center">{{ $berita->judul }}</h1>
        <p class="text-gray-600 mb-2 text-center">Tanggal: {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</p>

        @if($berita->gambar)
            <div class="flex justify-center mb-4">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="rounded-lg max-w-full h-auto">
            </div>
        @endif
        
        <div class="mb-4">
            <p class="text-gray-700 text-lg leading-relaxed">{{ $berita->isi }}</p>
        </div>
        
        <div class="text-gray-500 mb-2">
            <strong>Penulis:</strong> {{ $berita->penulis }}
        </div>
        
        @if($berita->referensi)
            <div class="text-gray-500 mb-4">
                <strong>Referensi:</strong> {{ $berita->referensi }}
            </div>
        @endif

        <div class="text-center">
            <button onclick="history.back()" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Kembali ke Halaman Sebelumnya</button>
        </div>
    </main>
    
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
