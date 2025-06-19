<x-app-layout>
    <div class="py-16 bg-gray-100 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="font-semibold text-2xl text-gray-800 leading-tight flex items-center gap-2">
                    Edit Transaksi
                </h2>
                <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Kategori -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fa-solid fa-folder-open mr-1 text-gray-500"></i> Kategori
                        </label>
                        <input type="text" name="kategori" value="{{ $transaksi->kategori }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                            required>
                    </div>

                    <!-- Jenis -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fa-solid fa-list-check mr-1 text-gray-500"></i> Jenis
                        </label>
                        <select name="jenis"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                            required>
                            <option value="Pemasukan" {{ $transaksi->jenis == 'Pemasukan' ? 'selected' : '' }}>Pemasukan
                            </option>
                            <option value="Pengeluaran" {{ $transaksi->jenis == 'Pengeluaran' ? 'selected' : '' }}>
                                Pengeluaran</option>
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fa-solid fa-money-bill-wave mr-1 text-gray-500"></i> Jumlah
                        </label>
                        <input type="number" id="jumlah" name="jumlah" value="{{ $transaksi->jumlah }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                            required>
                        <p id="rupiah-preview" class="text-sm text-gray-500 mt-1">
                            Rp{{ number_format($transaksi->jumlah, 0, ',', '.') }}
                        </p>
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fa-solid fa-calendar-days mr-1 text-gray-500"></i> Tanggal
                        </label>
                        <input type="date" name="tanggal" value="{{ $transaksi->tanggal }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                            required>
                    </div>

                    <!-- Keterangan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fa-solid fa-pen-nib mr-1 text-gray-500"></i> Keterangan
                        </label>
                        <textarea name="keterangan" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                            placeholder="Contoh: Gaji Bulan Juni">{{ $transaksi->keterangan }}</textarea>
                    </div>

                    <!-- Tombol -->
                    <div class="flex justify-end gap-3 pt-4">
                        <a href="{{ route('transaksi.index') }}"
                            class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
                        </a>

                        <button type="submit"
                            class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow transition">
                            <i class="fa-solid fa-floppy-disk mr-2"></i> Simpan Perubahan
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Script: Rupiah Preview -->
    <script>
        const jumlahInput = document.getElementById('jumlah');
        const rupiahPreview = document.getElementById('rupiah-preview');

        jumlahInput.addEventListener('input', function() {
            const value = parseInt(this.value);
            if (!isNaN(value)) {
                rupiahPreview.textContent = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(value);
            } else {
                rupiahPreview.textContent = '';
            }
        });
    </script>
</x-app-layout>
