<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
<body class="font-sans bg-yellow-300">

    <!-- Login Form Container -->
    <div class="min-h-screen flex flex-col lg:flex-row items-center justify-center px-4 lg:px-0">
        <!-- Form Section -->
        <div class="bg-white p-8 shadow-lg w-full max-w-md">
            <a href="/" class="block mb-4">
                <p class="text-right text-slate-400 text-xs">kembali</p>
            </a>
            
            <h1 class="text-3xl font-bold text-center mb-6">Login</h1>

            <form action="/login" method="POST">
                @csrf  <!-- Token CSRF -->
                
                <!-- Tampilkan pesan kesalahan jika ada -->
                @if ($errors->any())
                    <div class="mb-4 text-red-500">
                        {{ $errors->first() }}
                    </div>
                @endif
            
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email" required>
                </div>
            
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan password" required>
                </div>
            
                <!-- Remember Me Checkbox -->
                <div class="flex items-center justify-between mb-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600" name="remember">
                        <span class="ml-2 text-gray-700">Ingat Saya</span>
                    </label>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Lupa password?</a>
                </div>
            
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Masuk</button>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-600">Belum punya akun? <a href="register" class="text-blue-600 hover:underline">Daftar</a></p>
            </div>
        </div>

        <!-- Image Section -->
        <div class="hidden lg:block">
            <img src="https://via.placeholder.com/450x490" class="shadow-lg" alt="Gambar Login">
        </div>
    </div>

</body>

<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
</html>
