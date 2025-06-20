<x-guest-public-layout>
    <x-slot name="title">
        Tentang Kami - KeuanganKu
    </x-slot>

    <section class="relative bg-gradient-to-br from-white to-gray-50 py-20 md:py-24 overflow-hidden">
        {{-- Dekorasi Lingkaran (konsisten dengan halaman lain) --}}
        <div class="absolute -top-1/4 -left-1/4 w-96 h-96 bg-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
        <div class="absolute -bottom-1/4 -right-1/4 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow delay-2000"></div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10 animate-fade-in-up">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-gray-900 mb-6">
                Kisah di Balik <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-500">KeuanganKu</span>
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Kami adalah tim yang bersemangat, berdedikasi untuk memberdayakan Anda mengelola keuangan dengan cerdas dan mudah.
            </p>
        </div>
    </section>

    <section class="py-20 md:py-24 bg-gray-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                <div class="text-green-500 text-5xl mb-4">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Misi Kami</h3>
                <p class="text-gray-700 text-lg">Membantu setiap individu mengatur dan memahami keuangan mereka dengan antarmuka intuitif dan data yang jelas.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.4s;">
                <div class="text-blue-500 text-5xl mb-4">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Visi Kami</h3>
                <p class="text-gray-700 text-lg">Menjadi aplikasi pilihan utama untuk manajemen keuangan pribadi yang mudah dan efektif.</p>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-8 transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.6s;">
                <div class="text-purple-500 text-5xl mb-4">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Nilai Kami</h3>
                <p class="text-gray-700 text-lg">Inovasi, Transparansi, Keamanan, dan Kepuasan Pengguna adalah pilar utama yang mendorong setiap langkah kami.</p>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 md:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-12">
            <div class="animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Lebih dari Aplikasi, <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-blue-600">Sebuah Solusi Nyata</span>
                </h2>
                <p class="text-lg text-gray-700 mb-4">
                    Di era digital ini, kami melihat banyak individu berjuang dengan kompleksitas manajemen keuangan. Dari pencatatan manual yang membosankan hingga laporan yang sulit dipahami. KeuanganKu hadir sebagai jawaban atas tantangan ini.
                </p>
                <p class="text-lg text-gray-700 mb-4">
                    Kami percaya bahwa setiap orang, terlepas dari latar belakang finansialnya, berhak mendapatkan kendali penuh atas uang mereka dengan cara yang mudah, cerdas, dan menyenangkan. Bukan sekadar mencatat angka, tapi memahami cerita di baliknya.
                </p>
                <p class="text-lg text-gray-700">
                    Filosofi kami adalah menyederhanakan yang rumit, memberdayakan dengan informasi, dan menyediakan platform yang tumbuh bersama kebutuhan finansial Anda.
                </p>
            </div>
            <div class="flex justify-center animate-fade-in">
                <img src="{{ asset('images/meeting.jpg') }}" alt="Solusi Keuangan" class="w-full max-w-md rounded-2xl shadow-xl" /> {{-- Ilustrasi yang lebih konseptual --}}
            </div>
        </div>
    </section>

    <section class="py-20 md:py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-16 animate-fade-in-up">
                Pendekatan Kami dalam <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-blue-600">Pengembangan Produk</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="text-green-500 text-5xl mb-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Inovasi Berkelanjutan</h3>
                    <p class="text-gray-700 text-lg">Kami terus meneliti dan mengadopsi teknologi terbaru untuk menghadirkan fitur-fitur inovatif.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="text-blue-500 text-5xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Keamanan Data Prioritas</h3>
                    <p class="text-gray-700 text-lg">Melindungi data finansial Anda adalah komitmen utama kami dengan enkripsi standar industri.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col items-center transform transition duration-300 hover:scale-105 hover:shadow-xl animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="text-purple-500 text-5xl mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Berbasis Masukan Pengguna</h3>
                    <p class="text-gray-700 text-lg">Kami mendengarkan Anda. Fitur dan perbaikan selalu berlandaskan kebutuhan komunitas kami.</p>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 md:py-24 bg-gray-100 relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-16 text-center animate-fade-in-up">
                Pertanyaan yang Sering Diajukan
            </h2>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl shadow-lg p-6 animate-fade-in" style="animation-delay: 0.2s;">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">
                            Bagaimana KeuanganKu menjaga keamanan data saya?
                            <span class="transform transition-transform group-open:rotate-180">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-700 text-lg">
                            Kami menggunakan enkripsi data standar industri dan praktik keamanan terbaik untuk melindungi informasi finansial Anda. Semua koneksi dienkripsi (SSL/TLS), dan data disimpan dengan aman di server yang terproteksi.
                        </p>
                    </details>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 animate-fade-in" style="animation-delay: 0.4s;">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">
                            Apakah KeuanganKu gratis untuk digunakan?
                            <span class="transform transition-transform group-open:rotate-180">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-700 text-lg">
                            Ya, KeuanganKu menawarkan paket dasar gratis yang mencakup semua fitur esensial untuk manajemen keuangan pribadi Anda. Tersedia juga paket premium dengan fitur lebih lanjut untuk kebutuhan yang lebih kompleks.
                        </p>
                    </details>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 animate-fade-in" style="animation-delay: 0.6s;">
                    <details class="group">
                        <summary class="flex justify-between items-center cursor-pointer text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors">
                            Bisakah saya mengakses KeuanganKu di berbagai perangkat?
                            <span class="transform transition-transform group-open:rotate-180">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </summary>
                        <p class="mt-4 text-gray-700 text-lg">
                            Tentu saja! KeuanganKu dirancang untuk dapat diakses melalui web browser di berbagai perangkat, baik desktop, tablet, maupun ponsel, memastikan Anda selalu terhubung dengan keuangan Anda di mana saja.
                        </p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 md:py-24 bg-gradient-to-r from-green-500 to-blue-600 text-white text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-6 z-10 relative">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 animate-fade-in-up">
                Bergabunglah dengan Komunitas KeuanganKu!
            </h2>
            <p class="text-xl opacity-90 mb-10 animate-fade-in-up" style="animation-delay: 0.2s;">
                Kami antusias untuk membantu Anda meraih tujuan finansial Anda. Mulailah perjalanan Anda hari ini.
            </p>
            <a href="{{ route('register') }}"
                class="inline-block bg-white text-green-600 hover:text-green-700 font-bold py-4 px-10 rounded-full text-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 animate-fade-in-up" style="animation-delay: 0.4s;">
                Daftar Gratis Sekarang!
            </a>
        </div>
        {{-- Dekorasi latar belakang CTA --}}
        <div class="absolute inset-0 z-0 opacity-10">
            <i class="fas fa-users text-[200px] absolute -top-10 -left-10 rotate-12"></i>
            <i class="fas fa-handshake text-[180px] absolute -bottom-20 -right-20 -rotate-45"></i>
        </div>
    </section>

</x-guest-public-layout>