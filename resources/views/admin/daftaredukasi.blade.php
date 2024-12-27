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
        <!-- Daftar Edukasi Section -->
        <section class="bg-white py-12 mx-5 sm:mx-20">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-3xl font-semibold text-gray-600">Daftar Edukasi</h2>
                    <a href="{{ route('edukasi.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Tambah Edukasi</a>
                </div>
                
                <ul class="list-none space-y-6">
                    @foreach ($edukasis as $edukasi)
                    <li class="bg-gray-100 p-6 rounded-lg shadow-md relative">
                        <h3 class="text-xl font-semibold mb-2">{{ $edukasi->judul }}</h3>
                        <p class="text-gray-700 mb-4">{{ Str::limit($edukasi->isi, 100) }}</p>
                        <a href="{{ route('edukasi.show', $edukasi->id) }}" class="text-blue-600 hover:underline block mb-2">Baca Selengkapnya</a>
                        <div class="flex space-x-2 absolute top-4 right-4">
                            <a href="{{ route('edukasi.edit', $edukasi->id) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-400">Ubah</a>
                            <form action="{{ route('edukasi.destroy', $edukasi->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-400">Hapus</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
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
