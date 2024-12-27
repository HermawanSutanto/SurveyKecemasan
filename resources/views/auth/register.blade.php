<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
        @vite('resources/css/app.css')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            fetch.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').content;
        </script>
    </head>
<body class="font-sans bg-yellow-300">

    <!-- Register Form Container -->
    <div class="min-h-screen flex flex-col items-center justify-center px-4 py-12 lg:px-8">
        <div class="bg-white p-8 shadow-lg w-full max-w-2xl">
            <a href="login" class="block mb-4">
                <p class="text-right text-slate-400 text-xs">kembali</p>
            </a>
            
            <h1 class="text-3xl font-bold text-center mb-6">Register</h1>

            <!-- Form Register -->
            <form action="/register" method="POST">
                @csrf  <!-- Token CSRF wajib di Laravel -->

                <!-- Nama Lengkap -->
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-gray-700 text-sm font-semibold mb-2">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama lengkap" required>
                </div>
                @if ($errors->has('nama_lengkap'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('nama_lengkap') }}</p>
                @endif
            
                <!-- Nama Panggilan -->
                <div class="mb-4">
                    <label for="nama_panggilan" class="block text-gray-700 text-sm font-semibold mb-2">Nama Panggilan</label>
                    <input type="text" id="nama_panggilan" name="nama_panggilan" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama panggilan" required>
                </div>
                @if ($errors->has('nama_panggilan'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('nama_panggilan') }}</p>
                @endif
                <!-- Tanggal Lahir -->
                <div class="mb-4">
                    <label for="tanggal_lahir" class="block text-gray-700 text-sm font-semibold mb-2">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                @if ($errors->has('tanggal_lahir'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('tanggal_lahir') }}</p>
                @endif
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email" required>
                </div>
                @if ($errors->has('email'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                @endif
                {{-- <!-- Provinsi Dropdown -->
                <div class="mb-4">
                    <label for="provinsi" class="block text-gray-700 text-sm font-semibold mb-2">Provinsi</label>
                    <select id="provinsi" name="provinsi_id" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <option value="1">Jawa Barat</option>
                        <option value="2">Jawa Tengah</option>
                        <option value="3">Jawa Timur</option>
                        <!-- Tambahkan provinsi lainnya -->
                    </select>
                </div>
                @if ($errors->has('provinsi_id'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('provinsi_id') }}</p>
                @endif

                <!-- Kota Dropdown -->
                <div class="mb-4">
                    <label for="kota" class="block text-gray-700 text-sm font-semibold mb-2">Kota</label>
                    <select id="kota" name="kota_id" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Kota</option>
                        <option value="1">Bandung</option>
                        <option value="2">Semarang</option>
                        <option value="3">Surabaya</option>
                        <!-- Tambahkan kota lainnya -->
                    </select>
                </div>
                @if ($errors->has('kota_id'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('kota_id') }}</p>
                @endif --}}
                <!-- Provinsi Dropdown -->
                <div class="mb-4">
                    <label for="provinsi" class="block text-gray-700 text-sm font-semibold mb-2">Provinsi</label>
                    <select id="provinsi" name="provinsi_id" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <!-- Opsi provinsi akan dimuat melalui JavaScript -->
                    </select>
                </div>

                <!-- Kota Dropdown -->
                <div class="mb-4">
                    <label for="kota" class="block text-gray-700 text-sm font-semibold mb-2">Kota</label>
                    <select id="kota" name="kota_id" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="" disabled selected>Pilih Kota</option>
                        <!-- Opsi kota akan dimuat berdasarkan provinsi yang dipilih -->
                    </select>
                </div>
                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 text-sm font-semibold mb-2">Alamat</label>
                    <textarea id="alamat" name="alamat" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                </div>
                @if ($errors->has('alamat'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('alamat') }}</p>
                @endif
                <!-- Pekerjaan -->
                <div class="mb-4">
                    <label for="pekerjaan" class="block text-gray-700 text-sm font-semibold mb-2">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan pekerjaan" required>
                </div>
                @if ($errors->has('pekerjaan'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('pekerjaan') }}</p>
                @endif
                <!-- No Telepon/Whatsapp -->
                <div class="mb-4">
                    <label for="no_wa" class="block text-gray-700 text-sm font-semibold mb-2">No Telepon / Whatsapp</label>
                    <input type="text" id="no_wa" name="no_wa" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan no telepon/whatsapp" required>
                </div>
                @if ($errors->has('no_wa'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('no_wa') }}</p>
                @endif
                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">Konfirmasi Password</label>
                    <input type="password" id="password" name="password_confirmation" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password" required>
                </div>
                @if ($errors->has('password'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
                @endif
                <!-- Deskripsi Diri -->
                <div class="mb-6">
                    <label for="deskripsi" class="block text-gray-700 text-sm font-semibold mb-2">Deskripsi Diri</label>
                    <textarea id="deskripsi" name="deskripsi_diri" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Ceritakan sedikit tentang diri Anda" required></textarea>
                </div>
                @if ($errors->has('deskripsi'))
                <p class="text-red-500 text-xs italic">{{ $errors->first('deskripsi') }}</p>
                @endif
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Daftar</button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">Sudah punya akun? <a href="/login" class="text-blue-600 hover:underline">Login</a></p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const provinsiSelect = document.getElementById('provinsi');
            const kotaSelect = document.getElementById('kota');
    
            // Ambil data provinsi saat halaman dimuat
            fetch('/get-provinsi')
                .then(response => response.json())
                .then(data => {
                    data.forEach(provinsi => {
                        const option = document.createElement('option');
                        option.value = provinsi.id;
                        option.textContent = provinsi.nama_provinsi;
                        provinsiSelect.appendChild(option);
                    });
                });
    
            // Event listener untuk memuat kota berdasarkan provinsi yang dipilih
            provinsiSelect.addEventListener('change', function () {
                const provinsiId = this.value;
    
                // Kosongkan dropdown kota
                kotaSelect.innerHTML = '<option value="" disabled selected>Pilih Kota</option>';
    
                // Ambil data kota dari API
                fetch(`/get-kota?provinsi_id=${provinsiId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(kota => {
                            const option = document.createElement('option');
                            option.value = kota.id;
                            option.textContent = kota.nama_kota;
                            kotaSelect.appendChild(option);
                        });
                    });
            });
        });
    </script>
    
</body>
</html>
