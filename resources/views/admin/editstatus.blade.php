<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Status</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-100">
    <x-navbar />
    
    <main class="py-8 bg-white-300 md:px-40 h-auto md:mb-40">
        <section class="bg-white py-8 mx-4  sm:mx-16">
            <div class="container">
                <h1 class="text-2xl font-bold mb-6 text-center">Edit Status for {{ $user->nama_lengkap }}</h1>

                @if (session('success'))
                    <div class="bg-green-500 text-white py-2 px-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.updatestatus', $user->id) }}" method="POST" class="bg-white  rounded-lg p-6">
                    @csrf
                    @method('PUT')

                    <!-- Status selection -->
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>User</option>
                            <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Admin</option>
                        </select>

                        @error('status')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition duration-200">
                            Update Status
                        </button>
                    </div>
                    
                </form>
                <div class="text-center">
                    <button onclick="history.back()" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Kembali ke Halaman Sebelumnya</button>
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
