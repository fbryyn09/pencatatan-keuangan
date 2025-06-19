<x-app-layout>
    <div class="py-16 bg-gray-100 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg p-8 text-gray-800">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Tambah Transaksi
                </h2>

                <form action="{{ route('transaksi.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Kategori -->
                    <div>
                        <label for="kategori" class="block text-sm font-semibold mb-1">
                            <i class="fa-solid fa-folder-open mr-1 text-blue-500"></i> Kategori
                        </label>
                        <input type="text" name="kategori"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                    </div>

                    <!-- Jenis -->
                    <div>
                        <label for="jenis" class="block text-sm font-semibold mb-1">
                            <i class="fa-solid fa-list-ul mr-1 text-blue-500"></i> Jenis
                        </label>
                        <select name="jenis"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                            <option value="Pemasukan">Pemasukan</option>
                            <option value="Pengeluaran">Pengeluaran</option>
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div>
                        <label for="jumlah" class="block text-sm font-semibold mb-1">
                            <i class="fa-solid fa-money-bill-wave mr-1 text-blue-500"></i> Jumlah
                        </label>
                        <input type="number" id="jumlah" name="jumlah"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                        <p id="jumlah-terformat" class="text-sm text-gray-500 mt-1">Rp 0</p>
                    </div>


                    <!-- Tanggal -->
                    <div>
                        <label for="tanggal" class="block text-sm font-semibold mb-1">
                            <i class="fa-solid fa-calendar-days mr-1 text-blue-500"></i> Tanggal
                        </label>
                        <input type="date" name="tanggal"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            required>
                    </div>

                    <!-- Keterangan -->
                    <div>
                        <label for="keterangan" class="block text-sm font-semibold mb-1">
                            <i class="fa-solid fa-pencil-alt mr-1 text-blue-500"></i> Keterangan
                        </label>
                        <textarea name="keterangan" rows="3"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none"
                            placeholder="Opsional..."></textarea>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-end gap-3 pt-4">
                        <a href="{{ route('transaksi.index') }}"
                            class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
                        </a>

                        <button type="submit"
                            class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputJumlah = document.getElementById('jumlah');
            const displayRupiah = document.getElementById('jumlah-terformat');

            inputJumlah.addEventListener('input', function() {
                let angka = parseInt(this.value.replace(/\D/g, '')) || 0;
                displayRupiah.textContent = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(angka);
            });
        });
    </script>

</x-app-layout>
