<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <x-navbar />
    <main id="home" class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <!-- Daftar Profil Section -->
        <section class="bg-white py-8 mx-4 sm:mx-16">
            <div class="container">
                <h1 class="text-2xl font-bold mb-4 text-center sm:text-left">User Profiles</h1>
                <!-- Compact profile list container -->
                <div class="space-y-4">
                    @foreach ($users as $user)
                        <!-- Wrap the profile card with an anchor tag -->
                        <a href="{{ route('admin.editstatus', $user->id) }}" class="block hover:bg-gray-100 transition duration-200">
                            <div class="flex flex-col lg:flex-row bg-white shadow-md rounded-lg overflow-hidden p-4 lg:p-6">
                                <!-- Profile picture -->
                                <div class="flex-shrink-0 mx-auto lg:mx-0">
                                    <img src="{{ asset('storage/' . $user->foto_profil) }}" class="w-20 h-20 lg:w-28 lg:h-28 rounded-full object-cover" alt="{{ $user->nama_lengkap }}">
                                </div>

                                <!-- User details -->
                                <div class="flex-grow mt-4 lg:mt-0 lg:ml-6 text-center lg:text-left">
                                    <h5 class="text-lg font-semibold">{{ $user->nama_lengkap }} <span class="text-gray-500">({{ $user->nama_panggilan }})</span></h5>
                                    <div class="mt-2 text-sm text-gray-600">
                                        <p><strong>Email:</strong> {{ $user->email }}</p>
                                        <p><strong>Alamat:</strong> {{ $user->alamat }}</p>
                                        <p><strong>Pekerjaan:</strong> {{ $user->pekerjaan }}</p>
                                        <p><strong>No. WA:</strong> {{ $user->no_wa }}</p>
                                        <p><strong>Deskripsi Diri:</strong> {{ $user->deskripsi_diri }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
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
