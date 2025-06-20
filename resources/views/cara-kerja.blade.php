<x-guest-public-layout>
    <x-slot name="title">
        Cara Kerja Mudah - KeuanganKu
    </x-slot>

    <section class="min-h-screen bg-gradient-to-br from-white to-gray-50 relative overflow-hidden py-20 md:py-24">
        {{-- Dekorasi Lingkaran yang lebih halus (konsisten dengan Welcome & Fitur) --}}
        <div class="absolute -top-1/4 -left-1/4 w-96 h-96 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-1/4 -right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow delay-2000"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">

            {{-- Header Bagian Cara Kerja --}}
            <div class="text-center mb-16 animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-gray-900 mb-4">
                    Mulai Mengelola Keuangan Anda <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500">Dalam 3 Langkah Mudah</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kami telah menyederhanakan prosesnya agar Anda bisa fokus pada pencapaian tujuan finansial Anda.
                </p>
            </div>

            {{-- Langkah-langkah Cara Kerja --}}
            <div class="relative space-y-16 lg:space-y-24 mt-20">
                {{-- Garis vertikal di tengah (untuk desktop) --}}
                <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-green-300 to-blue-300 rounded-full"></div>

                {{-- Langkah 1: Daftar Akun --}}
                <div class="flex flex-col lg:flex-row items-center lg:justify-between w-full animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="lg:w-5/12 text-center lg:text-right p-6 bg-white rounded-2xl shadow-xl transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-5 rounded-full inline-flex mb-6">
                            <i class="fas fa-user-plus text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">1. Buat Akun Anda</h3>
                        <p class="text-lg text-gray-700">Daftarkan diri Anda hanya dalam beberapa menit. Proses cepat dan aman, siap untuk memulai perjalanan finansial Anda.</p>
                    </div>
                    {{-- Panah hanya muncul di layar lg ke atas, dan diatur posisi agar pas di garis tengah --}}
                    <div class="hidden lg:flex w-24 h-24 flex-shrink-0 bg-blue-100 rounded-full items-center justify-center -rotate-12 transform scale-110 shadow-lg text-blue-600 text-4xl -my-12 lg:my-0">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div class="lg:w-5/12 text-center lg:text-left"> {{-- Tambah text-center di mobile, text-left di desktop --}}
                        <img src="{{ asset('images/ilustrasi-mendaftar.jpg') }}" alt="Daftar Akun" class="w-full max-w-sm mx-auto lg:mx-0 opacity-90">
                    </div>
                </div>

                {{-- Langkah 2: Catat Transaksi --}}
                <div class="flex flex-col lg:flex-row-reverse items-center lg:justify-between w-full animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div class="lg:w-5/12 text-center lg:text-left p-6 bg-white rounded-2xl shadow-xl transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl">
                        <div class="bg-gradient-to-br from-green-500 to-green-700 text-white p-5 rounded-full inline-flex mb-6">
                            <i class="fas fa-clipboard-list text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">2. Catat Transaksi Anda</h3>
                        <p class="text-lg text-gray-700">Masukkan setiap pemasukan dan pengeluaran harian dengan antarmuka yang intuitif. Kategorikan dan tambahkan detail dengan mudah.</p>
                    </div>
                    {{-- Panah hanya muncul di layar lg ke atas, dan diatur posisi agar pas di garis tengah --}}
                    <div class="hidden lg:flex w-24 h-24 flex-shrink-0 bg-green-100 rounded-full items-center justify-center rotate-12 transform scale-110 shadow-lg text-green-600 text-4xl -my-12 lg:my-0">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="lg:w-5/12 text-center lg:text-right"> {{-- Tambah text-center di mobile, text-right di desktop --}}
                        <img src="{{ asset('images/ilustrasi-mencatat.jpg') }}" alt="Catat Transaksi" class="w-full max-w-sm mx-auto lg:mx-0 opacity-90">
                    </div>
                </div>

                {{-- Langkah 3: Analisis & Kelola --}}
                <div class="flex flex-col lg:flex-row items-center lg:justify-between w-full animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div class="lg:w-5/12 text-center lg:text-right p-6 bg-white rounded-2xl shadow-xl transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl">
                        <div class="bg-gradient-to-br from-purple-500 to-purple-700 text-white p-5 rounded-full inline-flex mb-6">
                            <i class="fas fa-chart-bar text-3xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">3. Analisis & Kelola</h3>
                        <p class="text-lg text-gray-700">Lihat laporan visual yang jelas, identifikasi pola pengeluaran, dan buat keputusan finansial yang lebih cerdas untuk masa depan Anda.</p>
                    </div>
                    {{-- Panah hanya muncul di layar lg ke atas, dan diatur posisi agar pas di garis tengah --}}
                    <div class="hidden lg:flex w-24 h-24 flex-shrink-0 bg-purple-100 rounded-full items-center justify-center -rotate-12 transform scale-110 shadow-lg text-purple-600 text-4xl -my-12 lg:my-0">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div class="lg:w-5/12 text-center lg:text-left"> {{-- Tambah text-center di mobile, text-left di desktop --}}
                        <img src="{{ asset('images/ilustrasi-analisiss.jpg') }}" alt="Analisis Keuangan" class="w-full max-w-sm mx-auto lg:mx-0 opacity-90">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-public-layout>