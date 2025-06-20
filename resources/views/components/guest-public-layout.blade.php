@props(['title'])
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'KeuanganKu - Catat Keuanganmu dengan Mudah' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out forwards;
        }

        .animate-fade-in-up {
            animation: fade-in 1.2s ease-out forwards;
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-coins text-green-500 text-2xl"></i>
                    <a href="#" class="text-2xl font-bold text-green-500 tracking-wide">KeuanganKu</a>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex space-x-6 font-medium text-gray-700">
                    <a href="{{ url('/') }}" class="hover:text-green-500 transition">Beranda</a>
                    <a href="{{ route('fitur') }}" class="hover:text-green-500 transition">Fitur</a>
                    <a href="{{ route('cara-kerja') }}" class="hover:text-green-500 transition">Cara Kerja</a>
                    <a href="{{ route('tentang') }}" class="hover:text-green-500 transition">Tentang Kami</a>
                </nav>

                <!-- Login & Sign In -->
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-green-500 transition">
                        <i class="fas fa-sign-in-alt mr-1"></i> Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 text-sm font-semibold bg-gradient-to-r from-green-500 to-green-600 text-white rounded-md shadow hover:from-green-600 hover:to-green-700 transition">
                        <i class="fas fa-user-plus mr-1"></i> Daftar
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="mobile-menu"
            class="hidden md:hidden px-4 pb-4 pt-2 bg-white/95 backdrop-blur border-t border-gray-200">
            <a href="{{ url('/') }}" class="block py-2 text-gray-700 hover:text-green-500 font-medium">Beranda</a>
            <a href="{{ route('fitur') }}" class="block py-2 text-gray-700 hover:text-green-500 font-medium">Fitur</a>
            <a href="{{ route('cara-kerja') }}" class="block py-2 text-gray-700 hover:text-green-500 font-medium">Cara
                Kerja</a>
            <a href="{{ route('tentang') }}"
                class="block py-2 text-gray-700 hover:text-green-500 font-medium">Tentang</a>
        </div>
    </header>

    <main>{{ $slot }}</main>

    <!-- Script Menu Mobile -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <footer class="bg-gray-900 text-gray-300 py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <i class="fas fa-coins text-green-500 text-3xl"></i>
                    <a href="{{ url('/') }}" class="text-3xl font-bold text-white tracking-wide">KeuanganKu</a>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Platform terbaik untuk mengelola keuangan pribadi Anda dengan mudah, aman, dan efisien.
                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i
                            class="fab fa-facebook-f text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i
                            class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i
                            class="fab fa-instagram text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300"><i
                            class="fab fa-linkedin-in text-xl"></i></a>
                </div>
            </div>

            <div>
                <h3 class="text-white font-semibold text-lg mb-4 border-b-2 border-green-500 pb-2 inline-block">Tautan
                    Cepat</h3>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Beranda</a></li>
                    <li><a href="{{ route('fitur') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Fitur</a></li>
                    <li><a href="{{ route('cara-kerja') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Cara Kerja</a></li>
                    <li><a href="{{ route('tentang') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Tentang Kami</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold text-lg mb-4 border-b-2 border-blue-500 pb-2 inline-block">Layanan
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('login') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Login</a></li>
                    <li><a href="{{ route('register') }}"
                            class="text-gray-400 hover:text-white transition duration-300">Daftar Akun</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Bantuan
                            (FAQ)</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Privasi &
                            Kebijakan</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-semibold text-lg mb-4 border-b-2 border-green-500 pb-2 inline-block">Hubungi
                    Kami</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-blue-400"></i> Jl. Kedondong II</li>
                    <li class="flex items-center"><i class="fas fa-envelope mr-2 text-blue-400"></i> example@gmail.com
                    </li>
                    <li class="flex items-center"><i class="fas fa-phone mr-2 text-blue-400"></i> +6282245336040</li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 mt-10 pt-8 border-t border-gray-700 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} KeuanganKu. Semua Hak Dilindungi Undang-Undang.</p>
        </div>
    </footer>
</body>

</html>
