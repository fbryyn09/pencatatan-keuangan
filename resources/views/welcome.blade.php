<x-guest-public-layout>
    <x-slot name="title">
        KeuanganKu - Catat Keuanganmu dengan Mudah
    </x-slot>

    <section
        class="min-h-screen flex items-center bg-gradient-to-br from-white to-gray-50 relative overflow-hidden py-20">
        {{-- Dekorasi Lingkaran yang lebih halus (sesuai guest-public-layout) --}}
        <div
            class="absolute -top-1/4 -left-1/4 w-96 h-96 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow">
        </div>
        <div
            class="absolute -bottom-1/4 -right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-12 relative z-10 py-16">
            <div class="animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl lg:text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                    Kelola Uangmu dengan <br class="hidden md:block"> <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-blue-600">Cerdas dan
                        Mudah</span>
                </h1>
                <p class="mt-6 text-xl text-gray-700 max-w-lg">
                    KeuanganKu membantu Anda mencatat setiap pemasukan dan pengeluaran, memahami pola keuangan, dan
                    mencapai tujuan finansial impian Anda.
                </p>
                <div class="mt-10 flex space-x-4">
                    <a href="{{ route('register') }}"
                        class="inline-block bg-gradient-to-r from-green-500 to-blue-600 hover:from-green-600 hover:to-blue-700 text-white font-bold py-4 px-8 rounded-full text-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        Mulai Gratis
                    </a>
                    <a href="{{ route('fitur') }}"
                        class="inline-block border border-gray-300 text-gray-800 hover:bg-gray-100 font-semibold py-4 px-8 rounded-full text-lg shadow-md transition-all duration-300 transform hover:-translate-y-1">
                        Pelajari Fitur
                    </a>
                </div>
            </div>

            <div class="flex justify-center animate-fade-in">
                <img src="{{ asset('images/keuangan.png') }}" alt="Ilustrasi Manajemen Keuangan"
                    class="w-full max-w-md md:max-w-xl lg:max-w-2xl" />
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-20 md:py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 animate-fade-in-up">
                Mudah, Cepat, dan Akurat
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-16 animate-fade-in-up" style="animation-delay: 0.2s;">
                Fokus pada apa yang penting, KeuanganKu akan menangani sisanya.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 animate-fade-in-up" style="animation-delay: 0.4s;">
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="text-blue-500 text-5xl mb-4">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Catat Sekejap</h3>
                    <p class="text-gray-600">Pencatatan pemasukan dan pengeluaran semudah menyentuh layar.</p>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="text-green-500 text-5xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Analisis Mendalam</h3>
                    <p class="text-gray-600">Grafik interaktif yang membantu Anda memahami pola keuangan.</p>
                </div>
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl">
                    <div class="text-purple-500 text-5xl mb-4">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Data Aman</h3>
                    <p class="text-gray-600">Keamanan data Anda adalah prioritas utama dengan enkripsi terkini.</p>
                </div>
            </div>
            <a href="{{ route('fitur') }}"
                class="mt-12 inline-block text-blue-600 hover:text-blue-700 font-semibold text-lg animate-fade-in-up"
                style="animation-delay: 0.6s;">
                Lihat Semua Fitur <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <section class="py-20 md:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center animate-fade-in">
                <img src="{{ asset('images/memilih-Keuangan.jpg') }}" alt="Mengapa Memilih Kami"
                    class="w-full md:w-3/4 max-w-md" />
            </div>
            <div class="animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Mengapa Memilih <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500">KeuanganKu?</span>
                </h2>
                <ul class="space-y-6 text-lg text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 text-2xl mr-3 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-xl mb-1">Mudah Digunakan</h3>
                            <p>Antarmuka yang ramah pengguna dirancang agar setiap orang bisa mengelola keuangan tanpa
                                kesulitan.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-hand-holding-dollar text-green-500 text-2xl mr-3 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-xl mb-1">Hemat Waktu & Uang</h3>
                            <p>Pencatatan yang efisien membantu Anda menghemat waktu dan menemukan potensi penghematan
                                uang.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-shield-alt text-green-500 text-2xl mr-3 mt-1"></i>
                        <div>
                            <h3 class="font-bold text-xl mb-1">Keamanan Prioritas</h3>
                            <p>Data finansial Anda dilindungi dengan teknologi enkripsi terbaru dan teraman.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-20 md:py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-16 animate-fade-in-up">
                Apa Kata Pengguna Kami
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center animate-fade-in"
                    style="animation-delay: 0.2s;">
                    <img src="{{ asset('images/human.jpg') }}" alt="Foto Pengguna"
                        class="w-20 h-20 rounded-full mb-4 object-cover">
                    <div class="flex items-center text-yellow-400 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i> {{-- Bintang setengah --}}
                    </div>
                    <p class="text-gray-700 text-lg italic mb-4">"KeuanganKu benar-benar mengubah cara saya mengelola
                        uang. Sangat mudah dan fitur grafiknya membantu saya melihat gambaran besar!"</p>
                    <p class="font-bold text-gray-900">- Febrian Fahrezi</p>
                    <p class="text-sm text-gray-500">Karyawan Swasta</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center animate-fade-in"
                    style="animation-delay: 0.4s;">
                    <img src="{{ asset('images/human.jpg') }}" alt="Foto Pengguna"
                        class="w-20 h-20 rounded-full mb-4 object-cover">
                    <div class="flex items-center text-yellow-400 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i> {{-- Bintang penuh --}}
                    </div>
                    <p class="text-gray-700 text-lg italic mb-4">"Aplikasi ini sangat intuitif. Sekarang saya tahu
                        persis kemana perginya setiap rupiah saya. Rekomendasi!"</p>
                    <p class="font-bold text-gray-900">- Mariana</p>
                    <p class="text-sm text-gray-500">Mahasiswa</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center animate-fade-in"
                    style="animation-delay: 0.6s;">
                    <img src="{{ asset('images/human.jpg') }}" alt="Foto Pengguna"
                        class="w-20 h-20 rounded-full mb-4 object-cover">
                    <div class="flex items-center text-yellow-400 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> {{-- Bintang kosong --}}
                    </div>
                    <p class="text-gray-700 text-lg italic mb-4">"Sebagai pebisnis kecil, KeuanganKu membantu saya
                        melacak keuangan pribadi saya terpisah dari bisnis. Sangat praktis!"</p>
                    <p class="font-bold text-gray-900">- Aryan</p>
                    <p class="text-sm text-gray-500">Pebisnis</p>
                </div>
            </div>
        </div>
    </section>

</x-guest-public-layout>
