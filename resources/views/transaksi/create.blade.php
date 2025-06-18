<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Tambah Transaksi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="kategori" class="block text-sm font-medium">Kategori</label>
                        <input type="text" name="kategori" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black" required>
                    </div>

                    <div class="mb-4">
                        <label for="jenis" class="block text-sm font-medium">Jenis</label>
                        <select name="jenis" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black" required>
                            <option value="Pemasukan">Pemasukan</option>
                            <option value="Pengeluaran">Pengeluaran</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="jumlah" class="block text-sm font-medium">Jumlah</label>
                        <input type="number" name="jumlah" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black" required>
                    </div>

                    <div class="mb-4">
                        <label for="tanggal" class="block text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black" required>
                    </div>

                    <div class="mb-4">
                        <label for="keterangan" class="block text-sm font-medium">Keterangan</label>
                        <textarea name="keterangan" class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black"></textarea>
                    </div>

                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-800">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
