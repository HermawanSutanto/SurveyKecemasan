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
    <main id="home" class="py-8 bg-gray-50 md:px-40 h-auto md:mb-40">
        <section class="mb-8 mt-10 h-full text-center xl:text-left px-5 sm:px-20">
            <div class="container mx-auto">
                <!-- Heading Section -->
                <x-back-button />

                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-4xl font-bold text-gray-800">Riwayat Tes {{ strtoupper($test) }}</h2>
                    <a href="{{ url('/rekap/' . $test . '/pdf') }}" class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition duration-200">
                        Download PDF
                    </a>
                    <a href="{{ url('/rekap/' . $test . '/excel') }}" class="ml-2 px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 transition duration-200">
                        Download Excel
                    </a>
                </div>
    
                <!-- Table Section -->
                <div class="overflow-x-auto shadow rounded-lg bg-white">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Nama Lengkap
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Hasil Tes
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Interpretasi
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Tanggal Tes
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($riwayatTes as $riwayat)
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $riwayat['nama_lengkap'] }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $riwayat['hasil_tes'] }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $riwayat['interpretasi'] }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ \Carbon\Carbon::parse($riwayat['created_at'])->format('d M Y') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                        Tidak ada data untuk tes {{ $test }}.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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
