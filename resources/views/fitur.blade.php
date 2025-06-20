<x-guest-public-layout>
    <x-slot name="title">
        Fitur Unggulan KeuanganKu
    </x-slot>

    <section
        class="min-h-screen flex items-center bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden py-20">
        {{-- Dekorasi Lingkaran yang lebih halus --}}
        <div
            class="absolute -top-1/4 -left-1/4 w-96 h-96 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow">
        </div>
        <div
            class="absolute -bottom-1/4 -right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">

            {{-- Header Bagian Fitur --}}
            <div class="text-center mb-16 animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-6"> {{-- Ubah dari text-5xl md:text-6xl ke text-4xl md:text-5xl dan mb-4 ke mb-6 --}}
                    Kekuatan di Balik <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-blue-600">Manajemen
                        Keuangan Anda</span>
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Temukan fitur-fitur canggih yang dirancang untuk menyederhanakan pencatatan, analisis, dan kontrol
                    finansial Anda, membawa Anda selangkah lebih dekat menuju kebebasan finansial.
                </p>
            </div>

            {{-- Grid Fitur --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-12 mt-12">

                {{-- Kartu Fitur 1: Pencatatan Transaksi Mudah (Menonjolkan) --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl col-span-1 md:col-span-2 lg:col-span-1 animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-clipboard-list text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Pencatatan Transaksi Instan</h3>
                    <p class="text-gray-700 text-lg">Catat setiap pemasukan dan pengeluaran Anda dengan cepat dan mudah.
                        Antarmuka intuitif memastikan Anda bisa melacak finansial dalam hitungan detik, di mana saja.
                    </p>
                </div>

                {{-- Kartu Fitur 2: Visualisasi Keuangan --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl animate-fade-in"
                    style="animation-delay: 0.4s;">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-chart-pie text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Grafik & Statistik Interaktif</h3>
                    <p class="text-gray-700 text-lg">Lihat gambaran besar keuangan Anda melalui visualisasi data yang
                        menawan dan mudah dipahami. Identifikasi tren pengeluaran, sumber pendapatan, dan potensi
                        penghematan dengan cepat.</p>
                </div>

                {{-- Kartu Fitur 3: Pengelolaan Kategori --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl animate-fade-in"
                    style="animation-delay: 0.6s;">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-tags text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Kategori Keuangan Fleksibel</h3>
                    <p class="text-gray-700 text-lg">Atur dan sesuaikan kategori transaksi sesuai gaya hidup Anda. Lacak
                        pengeluaran berdasarkan kategori untuk analisis yang mendalam dan perencanaan anggaran yang
                        presisi.</p>
                </div>

                {{-- Kartu Fitur 4: Keamanan Data --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl animate-fade-in"
                    style="animation-delay: 0.8s;">
                    <div class="bg-gradient-to-br from-red-500 to-red-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-shield-alt text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Keamanan Data Terenkripsi</h3>
                    <p class="text-gray-700 text-lg">Privasi dan keamanan data Anda adalah prioritas utama kami. Semua
                        informasi finansial Anda dilindungi dengan enkripsi tingkat lanjut, memastikan ketenangan
                        pikiran.</p>
                </div>

                {{-- Kartu Fitur 5: Laporan Ringkas & Export --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl animate-fade-in"
                    style="animation-delay: 1.0s;">
                    <div
                        class="bg-gradient-to-br from-yellow-500 to-yellow-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-file-invoice-dollar text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Laporan & Ekspor Mudah</h3>
                    <p class="text-gray-700 text-lg">Buat laporan keuangan bulanan atau tahunan secara instan. Ekspor
                        data Anda ke berbagai format untuk analisis lebih lanjut atau keperluan pribadi.</p>
                </div>

                {{-- Kartu Fitur 6: Akses Multi-platform (menonjolkan) --}}
                <div class="bg-white rounded-3xl shadow-xl p-8 xl:p-10 transform transition duration-500 hover:scale-[1.02] hover:shadow-2xl col-span-1 md:col-span-2 lg:col-span-1 animate-fade-in"
                    style="animation-delay: 1.2s;">
                    <div
                        class="bg-gradient-to-br from-indigo-500 to-indigo-700 text-white p-5 rounded-full inline-flex mb-6">
                        <i class="fas fa-globe text-3xl"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Akses di Berbagai Perangkat</h3>
                    <p class="text-gray-700 text-lg">Kelola keuangan Anda dari mana saja, kapan saja, melalui desktop,
                        tablet, atau ponsel Anda. Antarmuka responsif memastikan pengalaman yang mulus di setiap layar.
                    </p>
                </div>

            </div>

            {{-- Call to Action --}}
            <div class="text-center mt-20 animate-fade-in-up" style="animation-delay: 1.4s;">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Mulai Rasakan Perbedaannya Sekarang
                </h2>
                <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-10">
                    Gabunglah dengan ribuan pengguna yang sudah mengambil kendali penuh atas keuangan mereka. Proses
                    pendaftaran cepat dan gratis!
                </p>
                <a href="{{ route('register') }}"
                    class="inline-block bg-gradient-to-r from-green-500 to-blue-600 hover:from-green-600 hover:to-blue-700 text-white font-bold py-4 px-10 rounded-full text-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    Daftar Gratis Sekarang!
                </a>
            </div>
        </div>
    </section>
</x-guest-public-layout>
