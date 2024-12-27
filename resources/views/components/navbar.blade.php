<header class="shadow-md z-10 sticky top-0 bg-white text-black md:px-10 py-2">
    <div class="container flex flex-row mx-auto justify-between px-20 items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-button" class="block basis-1/3 xl:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="absolute top-16 left-4 bg-white text-black w-48 xl:hidden hidden space-y-4 p-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="{{url('/tes')}}" class="hover:underline">Tes</a></li>

            <!-- Dropdown Berita -->
            <li class="relative">
                <a href="javascript:void(0)" id="berita-menu" class="hover:underline cursor-pointer">Berita</a>
                <ul id="berita-dropdown" class="mt-2 hidden bg-white shadow-lg rounded-lg w-full">
                    <li><a href="{{ route('viewberita') }}" class="block px-4 py-2 hover:bg-gray-200">Berita Terkini</a></li>
                    @auth
                    <li><a href="{{ route('berita.index') }}" class="block px-4 py-2 hover:bg-gray-200">Daftar Berita</a></li>
                    @endauth
                </ul>
            </li>
            <!-- Dropdown Edukasi -->
            <li class="relative">
                <a href="javascript:void(0)" id="edukasi-menu" class="hover:underline cursor-pointer">Edukasi</a>
                <ul id="edukasi-dropdown" class="mt-2 hidden bg-white shadow-lg rounded-lg w-full">
                    <li><a href="{{ route('viewedukasi') }}" class="block px-4 py-2 hover:bg-gray-200">Edukasi Terkini</a></li>
                    @auth
                    <li><a href="{{ route('edukasi.index') }}" class="block px-4 py-2 hover:bg-gray-200">Daftar Edukasi</a></li>
                    @endauth
                </ul>
            </li>

            <li><a href="#contact" class="hover:underline">Tentang Kami</a></li>
        </ul>

        <!-- Logo -->
        <img class="w-auto h-20 mr-10 py-2" src="\img\MMHIRC.png" alt="Logo">

        <!-- Main Navigation -->
        <nav class="py-1">
            <ul id="menu" class="hidden xl:flex space-x-4 relative">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="{{url('/tes')}}" class="hover:underline">Tes Psikologi</a></li>

                <!-- Dropdown for Berita -->
                <li class="relative">
                    <a href="javascript:void(0)" id="berita-menu-desktop" class="hover:underline cursor-pointer">Berita</a>
                    <ul id="berita-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2">
                        <li><a href="{{url('/viewberita')}}" class="block px-4 py-2 hover:bg-gray-200">Berita Terkini</a></li>
                        @auth
                        <li><a href="{{url('/daftarberit')}}a" class="block px-4 py-2 hover:bg-gray-200">Daftar Berita</a></li>
                        @endauth
                    </ul>
                </li>

                <!-- Dropdown for Edukasi -->
                <li class="relative">
                    <a href="javascript:void(0)" id="edukasi-menu-desktop" class="hover:underline cursor-pointer">Edukasi</a>
                    <ul id="edukasi-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2">
                        <li><a href="{{url('/viewedukasi')}}" class="block px-4 py-2 hover:bg-gray-200">Edukasi Terkini</a></li>
                        @auth
                        <li><a href="{{url('/daftaredukasi')}}" class="block px-4 py-2 hover:bg-gray-200">Daftar Edukasi</a></li>
                        @endauth
                    </ul>
                </li>

                <li><a href="#contact" class="hover:underline">Tentang Kami</a></li>

                <!-- Blade Directive: Menampilkan tombol berdasarkan status login -->
                @guest
                    <li><a href='{{url('/login')}}' class="text-black focus:outline-none bg-yellow-300 rounded-md px-4 py-1">Masuk</a></li>
                @endguest

                @auth
                <!-- Desktop Profile Button -->
                <li class="relative xl:flex hidden">
                    <button id="profile-button-desktop" class="text-black focus:outline-none bg-yellow-300 rounded-md px-4 py-1">
                        Profil
                    </button>
                    <!-- Dropdown Menu -->
                    <ul id="profile-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2 right-0">
                        <li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a></li>
                        
                        @if (Auth::user()->status == 1)
                            <li><a href="{{ route('user.profiles') }}" class="block px-4 py-2 hover:bg-gray-200">Daftar Profil</a></li>
                        @endif
                    
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                    
                </li>
                @endauth
            </ul>

            <!-- Mobile "Masuk" Button -->
            @guest
                <a href='{{url('/login')}}' class="text-black xl:hidden focus:outline-none bg-yellow-300 rounded-md px-4 py-1">Masuk</a>
            @endguest

            @auth
                <!-- Mobile Profile Button -->
                <li class="relative xl:hidden">
                    <button id="profile-button-mobile" class="text-black focus:outline-none bg-yellow-300 rounded-md px-4 py-1">
                        Profil
                    </button>
                    <!-- Dropdown Menu -->
                    <ul id="profile-dropdown-mobile" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2 right-0">
                        <li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>

            @endauth
        </nav>
    </div>
</header>

<!-- JavaScript for toggling the mobile menu -->
<script>
    document.getElementById('menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile Dropdown for Berita
    const beritaMenu = document.getElementById('berita-menu');
    const beritaDropdown = document.getElementById('berita-dropdown');
    const edukasiDropdown = document.getElementById('edukasi-dropdown');

    beritaMenu.addEventListener('click', () => {
        beritaDropdown.classList.toggle('hidden');
        beritaDropdown.classList.toggle('dropdown-open');
        if (!edukasiDropdown.classList.contains('hidden')) {
            edukasiDropdown.classList.add('hidden');
            edukasiDropdown.classList.remove('dropdown-open');
        }
    });

    // Mobile Dropdown for Edukasi
    const edukasiMenu = document.getElementById('edukasi-menu');
    edukasiMenu.addEventListener('click', () => {
        edukasiDropdown.classList.toggle('hidden');
        edukasiDropdown.classList.toggle('dropdown-open');
        if (!beritaDropdown.classList.contains('hidden')) {
            beritaDropdown.classList.add('hidden');
            beritaDropdown.classList.remove('dropdown-open');
        }
    });

    // Desktop Dropdown for Berita
    const beritaMenuDesktop = document.getElementById('berita-menu-desktop');
    const beritaDropdownDesktop = document.getElementById('berita-dropdown-desktop');

    beritaMenuDesktop.addEventListener('click', () => {
        beritaDropdownDesktop.classList.toggle('hidden');
        beritaDropdownDesktop.classList.toggle('dropdown-open');
        if (!edukasiDropdownDesktop.classList.contains('hidden')) {
            edukasiDropdownDesktop.classList.add('hidden');
            edukasiDropdownDesktop.classList.remove('dropdown-open');
        }
    });

    // Desktop Dropdown for Edukasi
    const edukasiMenuDesktop = document.getElementById('edukasi-menu-desktop');
    const edukasiDropdownDesktop = document.getElementById('edukasi-dropdown-desktop');

    edukasiMenuDesktop.addEventListener('click', () => {
        edukasiDropdownDesktop.classList.toggle('hidden');
        edukasiDropdownDesktop.classList.toggle('dropdown-open');
        if (!beritaDropdownDesktop.classList.contains('hidden')) {
            beritaDropdownDesktop.classList.add('hidden');
            beritaDropdownDesktop.classList.remove('dropdown-open');
        }
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', (event) => {
        if (!beritaMenu.contains(event.target) && !beritaDropdown.contains(event.target)) {
            beritaDropdown.classList.add('hidden');
            beritaDropdown.classList.remove('dropdown-open');
        }
        if (!edukasiMenu.contains(event.target) && !edukasiDropdown.contains(event.target)) {
            edukasiDropdown.classList.add('hidden');
            edukasiDropdown.classList.remove('dropdown-open');
        }

        if (!beritaMenuDesktop.contains(event.target) && !beritaDropdownDesktop.contains(event.target)) {
            beritaDropdownDesktop.classList.add('hidden');
            beritaDropdownDesktop.classList.remove('dropdown-open');
        }
        if (!edukasiMenuDesktop.contains(event.target) && !edukasiDropdownDesktop.contains(event.target)) {
            edukasiDropdownDesktop.classList.add('hidden');
            edukasiDropdownDesktop.classList.remove('dropdown-open');
        }
    });

            // Desktop Profile Dropdown Toggle
    document.getElementById('profile-button-desktop').addEventListener('click', function() {
        const dropdown = document.getElementById('profile-dropdown-desktop');
        dropdown.classList.toggle('hidden');
    });

    // Mobile Profile Dropdown Toggle
    document.getElementById('profile-button-mobile').addEventListener('click', function() {
        const dropdown = document.getElementById('profile-dropdown-mobile');
        dropdown.classList.toggle('hidden');
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        // Desktop
        const isDesktopClickInside = document.getElementById('profile-button-desktop').contains(event.target) || 
                                    document.getElementById('profile-dropdown-desktop').contains(event.target);
        if (!isDesktopClickInside) {
            document.getElementById('profile-dropdown-desktop').classList.add('hidden');
        }

        // Mobile
        const isMobileClickInside = document.getElementById('profile-button-mobile').contains(event.target) || 
                                    document.getElementById('profile-dropdown-mobile').contains(event.target);
        if (!isMobileClickInside) {
            document.getElementById('profile-dropdown-mobile').classList.add('hidden');
        }
    });
</script>