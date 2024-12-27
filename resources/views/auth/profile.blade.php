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
            <x-back-button />
            <div class="container mx-auto py-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex justify-center mb-6">
                        @if (Auth::user()->foto_profil)
                            <img src="{{ asset('storage/' . Auth::user()->foto_profil) }}" alt="Profile Picture" class="w-32 h-32 rounded-full">
                        @else
                            <p>{{ Auth::user()->foto_profil }}</p>
                        @endif
                    </div>
                    <h1 class="text-center text-2xl font-bold mb-4">{{ Auth::user()->nama_lengkap }}</h1>
    
                    <!-- Tombol Edit Profil -->
                    <div class="flex justify-center mb-4">
                        <a href="{{ route('profile.edit') }}" class="text-blue-500 hover:text-blue-700 flex items-center">
                            Edit Profil
                        </a>
                    </div>
    
                    <!-- Full Name -->
                    <div class="mb-4">
                        <label for="nama_lengkap" class="block text-gray-700">Nama Lengkap:</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-input w-full" value="{{ Auth::user()->nama_lengkap }}">
                    </div>
    
                    <!-- nama_panggilan -->
                    <div class="mb-4">
                        <label for="nama_panggilan" class="block text-gray-700">Nama Panggilan:</label>
                        <input type="text" id="nama_panggilan" name="nama_panggilan" class="form-input w-full" value="{{ Auth::user()->nama_panggilan }}">
                    </div>
    
                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="tanggal_lahir" class="block text-gray-700">Tanggal Lahir:</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-input w-full" value="{{ Auth::user()->tanggal_lahir }}">
                    </div>
    
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" class="form-input w-full" value="{{ Auth::user()->email }}" readonly>
                    </div>
    
                    <!-- provinsi -->
                    <div class="mb-4">
                        <label for="provinsi" class="block text-gray-700">Provinsi:</label>
                        <input type="text" id="provinsi" name="provinsi" class="form-input w-full" value="{{ $provinsi->where('id', $user->provinsi_id)->first()->nama_provinsi }}" readonly>
                    </div>
    
                    <!-- kota -->
                    <div class="mb-4">
                        <label for="kota" class="block text-gray-700">Kota:</label>
                        <input type="text" id="kota" name="kota" class="form-input w-full" value="{{ $kota->where('id', $user->kota_id)->first()->nama_kota }}" readonly>
                    </div>
    
                    <!-- alamat -->
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700">Alamat:</label>
                        <textarea id="alamat" name="alamat" class="form-textarea w-full">{{ Auth::user()->alamat }}</textarea>
                    </div>
    
                    <!-- pekerjaan -->
                    <div class="mb-4">
                        <label for="pekerjaan" class="block text-gray-700">Pekerjaan:</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" class="form-input w-full" value="{{ Auth::user()->pekerjaan }}">
                    </div>
    
                    <!-- no_wa -->
                    <div class="mb-4">
                        <label for="no_wa" class="block text-gray-700">No. WA:</label>
                        <input type="text" id="no_wa" name="no_wa" class="form-input w-full" value="{{ Auth::user()->no_wa }}">
                    </div>
    
                    <!-- deskripsi_diri -->
                    <div class="mb-4">
                        <label for="deskripsi_diri" class="block text-gray-700">Deskripsi Diri:</label>
                        <textarea id="deskripsi_diri" name="deskripsi_diri" class="form-textarea w-full">{{ Auth::user()->deskripsi_diri }}</textarea>
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
    