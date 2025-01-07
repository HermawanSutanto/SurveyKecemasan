<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tes Kesehatan Mental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50">
    <x-navbar />

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg mt-8">
        <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">Hasil Tes Kesehatan Mental</h1>

        <!-- Hasil -->
        <div class="text-center">
            @if (!empty($nama_lengkap))
            <p class="text-gray-700">Nama Lengkap: <span class="font-bold">{{ $nama_lengkap }}</span></p>
            @endif

            <p class="text-gray-700 mt-2">Jenis Tes: <span class="font-bold">{{ $test }}</span></p>

            @if ($test == 'SRQ' || $test == 'SAS')
            <p class="text-gray-700 mt-2">Skor Total: <span class="font-bold">{{ $hasil_tes }}</span></p>
            <p class="text-gray-700 mt-2">Interpretasi: <span class="font-bold">{{ $interpretasi }}</span></p>
            @elseif ($test == 'SDQ')
            <p class="text-gray-700 mt-2">Skor Kesulitan: <span class="font-bold">{{ $skor_kesulitan }}</span> ({{ $interpretasi_kesulitan }})</p>
            <p class="text-gray-700 mt-2">Skor Kekuatan: <span class="font-bold">{{ $skor_kekuatan }}</span> ({{ $interpretasi_kekuatan }})</p>
            @endif
        </div>

        <!-- Penjelasan Hasil -->
        <div class="mt-8">
            <h2 class="text-lg font-bold text-gray-800">Penjelasan Hasil</h2>
            <p class="text-gray-600 mt-2">
                {{ $penjelasan_hasil }}
            </p>
        </div>

        <!-- Tombol kembali -->
        <div class="mt-6 text-center">
            <a href="{{ route('opsi.index', ['test' => $test]) }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                Kembali ke Tes
            </a>
        </div>
    </div>
</body>
</html>
