<header id="navbar" class="sticky top-0 z-10 bg-white shadow-md transition-all duration-300 ease-in-out rounded-xl px-4">
    <div class="container flex flex-row mx-auto justify-between px-20 items-center">
        <!-- Mobile Menu Button -->
        <button id="menu-button" class="block basis-1/3 xl:hidden text-black focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="absolute top-16 left-4 bg-white text-black w-48 xl:hidden hidden space-y-4 p-4">
            <li><a href="/" class="hover:underline">Beranda</a></li>
            <!-- Layanan (Dropdown Tes) -->
            <li class="relative">
                <a href="javascript:void(0)" id="layanan-menu" class="hover:underline cursor-pointer flex items-center">
                    Layanan
                    <svg class="w-4 h-4 ml-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                    </svg>
                </a>
                <ul id="layanan-dropdown" class="mt-2 hidden bg-white  rounded-lg w-full">
                    <li><a href="{{ url('/tes') }}" class="block px-4 py-2 hover:bg-gray-200">Tes Psikologi</a></li>
                </ul>
            </li>
            

            <!-- Blog (Dropdown Berita dan Edukasi) -->
            <li class="relative">
                <a href="javascript:void(0)" id="blog-menu" class="hover:underline cursor-pointer flex items-center">
                    Blog
                    <svg class="w-4 h-4 ml-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                    </svg>
                </a>
                <ul id="blog-dropdown" class="mt-2 hidden bg-white rounded-lg w-full">
                    <li><a href="{{ route('viewberita') }}" class="block px-4 py-2 hover:bg-gray-200">Berita</a></li>
                    <li><a href="{{ route('viewedukasi') }}" class="block px-4 py-2 hover:bg-gray-200">Edukasi</a></li>
                </ul>
            </li>

            <li><a href="#contact" class="hover:underline">Tentang Kami</a></li>   
        </ul>

        <!-- Logo -->
        <img class="w-auto h-20 mr-10 py-2" src="\img\MMHIRC.png" alt="Logo">

        <!-- Main Navigation -->
        <nav class="py-1">
            <ul id="menu" class="hidden xl:flex space-x-4 relative">
                <li><a href="/" class="hover:underline">Beranda</a></li>

               <!-- Layanan (Dropdown Tes) -->
                <li class="relative">
                    <a href="javascript:void(0)" id="layanan-menu-desktop" class="hover:underline cursor-pointer flex items-center">
                        Layanan
                        <svg class="w-4 h-4 ml-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                        </svg>
                    </a>
                    <ul id="layanan-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2">
                        <li><a href="{{ url('/tes') }}" class="block px-4 py-2 hover:bg-gray-200">Tes Psikologi</a></li>
                    </ul>
                </li>

                <!-- Blog (Dropdown Berita dan Edukasi) -->
                <li class="relative">
                    <a href="javascript:void(0)" id="blog-menu-desktop" class="hover:underline cursor-pointer flex items-center">
                        Blog
                        <svg class="w-4 h-4 ml-2 transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                        </svg>
                    </a>
                    <ul id="blog-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2">
                        <li><a href="{{ route('viewberita') }}" class="block px-4 py-2 hover:bg-gray-200">Berita</a></li>
                        <li><a href="{{ route('viewedukasi') }}" class="block px-4 py-2 hover:bg-gray-200">Edukasi</a></li>
                    </ul>
                </li>


                <li><a href="#contact" class="hover:underline">Tentang Kami</a></li>

                @guest
                    <li><a href='{{ url('/login') }}' class="text-black focus:outline-none bg-buttonCL rounded-2xl px-5 py-2">Login</a></li>
                @endguest

                @auth
                <!-- Desktop Profile Button -->
                <li class="relative xl:flex hidden">
                    <button id="profile-button-desktop" class="text-black focus:outline-none bg-buttonCL rounded-md px-4 py-1">
                        Profil
                    </button>
                    <!-- Dropdown Menu -->
                    <ul id="profile-dropdown-desktop" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2 right-0">
                        <li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>

            <!-- Mobile "Login" Button -->
            @guest
                <a href='{{ url('/login') }}' class="text-black xl:hidden focus:outline-none bg-buttonCL px-5 py-2 rounded-2xl">Login</a>
            @endguest
            @auth
                <!-- Mobile Profile Button -->
                <div class="relative xl:hidden">
                    <button id="profile-button-mobile" class="text-black focus:outline-none bg-buttonCL rounded-md px-4 py-1">
                        Profil
                    </button>
                    <!-- Mobile Dropdown -->
                    <ul id="profile-dropdown-mobile" class="absolute hidden bg-white shadow-lg rounded-lg w-48 mt-2 right-0">
                        <li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-200">Lihat Profil</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-200">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </nav>
    </div>
</header>

<!-- JavaScript for toggling the mobile menu -->
<script>
    // Fungsi untuk mengupdate kondisi navbar
   // Fungsi untuk mengupdate kondisi navbar
const updateNavbar = () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('m-sticky-end', 'shadow-sticky');
        navbar.classList.remove('m-sticky-start', 'rounded-xl');
    } else {
        navbar.classList.add('m-sticky-start', 'rounded-xl');
        navbar.classList.remove('m-sticky-end', 'shadow-sticky');
    }
};

document.addEventListener('DOMContentLoaded', () => {
    updateNavbar();
});

window.addEventListener('scroll', () => {
    updateNavbar();
});

// Toggle mobile menu
document.getElementById('menu-button').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('transition-all');  // Smooth transition effect
});

// Toggle dropdown for Layanan, Blog, Berita, and Edukasi (Mobile + Desktop)
document.getElementById('layanan-menu').addEventListener('click', () => {
    const layananDropdown = document.getElementById('layanan-dropdown');
    const layananArrow = document.querySelector('#layanan-menu svg');
    layananDropdown.classList.toggle('hidden');
    layananArrow.classList.toggle('rotate-180'); // Rotate arrow when dropdown is open
    document.getElementById('blog-dropdown').classList.add('hidden'); // Close Blog dropdown if open
    document.querySelector('#blog-menu svg')?.classList.remove('rotate-180'); // Close Blog arrow if open
});

document.getElementById('blog-menu').addEventListener('click', () => {
    const blogDropdown = document.getElementById('blog-dropdown');
    const blogArrow = document.querySelector('#blog-menu svg');
    blogDropdown.classList.toggle('hidden');
    blogArrow.classList.toggle('rotate-180'); // Rotate arrow when dropdown is open
    document.getElementById('layanan-dropdown').classList.add('hidden'); // Close Layanan dropdown if open
    document.querySelector('#layanan-menu svg')?.classList.remove('rotate-180'); // Close Layanan arrow if open
});

// Desktop version: Toggle dropdown for Layanan, Blog
document.getElementById('layanan-menu-desktop').addEventListener('click', () => {
    const layananDropdown = document.getElementById('layanan-dropdown-desktop');
    const layananArrow = document.querySelector('#layanan-menu-desktop svg');
    layananDropdown.classList.toggle('hidden');
    layananArrow.classList.toggle('rotate-180'); // Rotate arrow when dropdown is open
    document.getElementById('blog-dropdown-desktop').classList.add('hidden'); // Close Blog dropdown if open
    document.querySelector('#blog-menu-desktop svg')?.classList.remove('rotate-180'); // Close Blog arrow if open
});

document.getElementById('blog-menu-desktop').addEventListener('click', () => {
    const blogDropdown = document.getElementById('blog-dropdown-desktop');
    const blogArrow = document.querySelector('#blog-menu-desktop svg');
    blogDropdown.classList.toggle('hidden');
    blogArrow.classList.toggle('rotate-180'); // Rotate arrow when dropdown is open
    document.getElementById('layanan-dropdown-desktop').classList.add('hidden'); // Close Layanan dropdown if open
    document.querySelector('#layanan-menu-desktop svg')?.classList.remove('rotate-180'); // Close Layanan arrow if open
});

// Close dropdowns when clicking outside
document.addEventListener('click', (event) => {
    const isLayananClickInside = document.getElementById('layanan-menu').contains(event.target) ||
                                 document.getElementById('layanan-dropdown').contains(event.target) ||
                                 document.getElementById('layanan-menu-desktop').contains(event.target) ||
                                 document.getElementById('layanan-dropdown-desktop').contains(event.target);

    if (!isLayananClickInside) {
        document.getElementById('layanan-dropdown').classList.add('hidden');
        document.getElementById('layanan-dropdown-desktop').classList.add('hidden');
        document.querySelector('#layanan-menu svg')?.classList.remove('rotate-180');
        document.querySelector('#layanan-menu-desktop svg')?.classList.remove('rotate-180');
    }

    const isBlogClickInside = document.getElementById('blog-menu').contains(event.target) ||
                              document.getElementById('blog-dropdown').contains(event.target) ||
                              document.getElementById('blog-menu-desktop').contains(event.target) ||
                              document.getElementById('blog-dropdown-desktop').contains(event.target);

    if (!isBlogClickInside) {
        document.getElementById('blog-dropdown').classList.add('hidden');
        document.getElementById('blog-dropdown-desktop').classList.add('hidden');
        document.querySelector('#blog-menu svg')?.classList.remove('rotate-180');
        document.querySelector('#blog-menu-desktop svg')?.classList.remove('rotate-180');
    }
});


</script>
