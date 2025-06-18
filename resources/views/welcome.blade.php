<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KeuanganKu - Catat Keuanganmu dengan Mudah</title>
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

<body class="bg-gradient-to-br from-[#0f172a] to-[#1f2a3d] text-white">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-[#0f172a]/80 backdrop-blur border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-coins text-green-400 text-2xl"></i>
                    <a href="#" class="text-2xl font-bold text-green-400 tracking-wide">KeuanganKu</a>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex space-x-6 font-medium text-white/80">
                    <a href="#" class="hover:text-green-400 transition">Beranda</a>
                    <a href="#fitur" class="hover:text-green-400 transition">Fitur</a>
                    <a href="#cara-kerja" class="hover:text-green-400 transition">Cara Kerja</a>
                    <a href="#tentang" class="hover:text-green-400 transition">Tentang</a>
                </nav>

                <!-- Login & Sign In -->
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 text-sm font-semibold text-white hover:text-green-400 transition">
                        <i class="fas fa-sign-in-alt mr-1"></i> Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="px-4 py-2 text-sm font-semibold bg-gradient-to-r from-green-500 to-green-600 text-white rounded-md shadow hover:from-green-600 hover:to-green-700 transition">
                        <i class="fas fa-user-plus mr-1"></i> Daftar
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="mobile-menu"
            class="hidden md:hidden px-4 pb-4 pt-2 bg-black/90 backdrop-blur border-t border-white/10">
            <a href="#" class="block py-2 text-white hover:text-green-400 font-medium">Beranda</a>
            <a href="#fitur" class="block py-2 text-white hover:text-green-400 font-medium">Fitur</a>
            <a href="#cara-kerja" class="block py-2 text-white hover:text-green-400 font-medium">Cara Kerja</a>
            <a href="#tentang" class="block py-2 text-white hover:text-green-400 font-medium">Tentang</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center relative overflow-hidden">
        <!-- Dekorasi Lingkaran -->
        <div class="absolute -top-10 -left-10 w-64 h-64 bg-green-500/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-green-400/20 rounded-full blur-2xl animate-ping"></div>

        <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 items-center gap-12 relative z-10">
            <!-- Text -->
            <div class="animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Selamat Datang di <br />
                    <span class="text-green-400">Pencatatan Keuangan</span>
                </h1>
                <p class="mt-6 text-lg text-white/80">
                    Aplikasi sederhana dan aman untuk mencatat pemasukan serta pengeluaran harianmu secara efisien dan
                    modern.
                </p>
                <div class="mt-8">
                    <a href="{{ route('register') }}"
                        class="inline-block px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-md shadow-lg transition-all duration-300 hover:scale-105">
                        Mulai Sekarang
                    </a>
                </div>
            </div>

            <!-- Ilustrasi -->
            <div class="flex justify-center animate-fade-in">
                <img src="{{ asset('images/keuangan.png') }}" alt="Ilustrasi Keuangan" class="w-72 md:w-[400px]" />
            </div>
        </div>
    </section>

    <!-- Script Menu Mobile -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
