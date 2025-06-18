<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Daftar Transaksi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">

                <a href="{{ route('transaksi.create') }}"
                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded mb-4 transition duration-200">
                    Tambah Transaksi
                </a>

                <div class="overflow-x-auto">
                    <table
                        class="w-full text-sm text-left text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-700 rounded-lg">
                        <thead class="text-xs uppercase bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Jenis</th>
                                <th scope="col" class="px-6 py-3">Jumlah</th>
                                <th scope="col" class="px-6 py-3">Tanggal</th>
                                <th scope="col" class="px-6 py-3">Keterangan</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $t)
                                <tr
                                    class="border-t border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                                    <td class="px-6 py-4">{{ $t->kategori }}</td>
                                    <td class="px-6 py-4">
                                        @if ($t->jenis === 'pemasukan')
                                            <span
                                                class="bg-green-200 text-green-800 text-xs font-semibold px-2 py-1 rounded-full">
                                                {{ $t->jenis }}
                                            </span>
                                        @else
                                            <span
                                                class="bg-red-200 text-red-800 text-xs font-semibold px-2 py-1 rounded-full">
                                                {{ $t->jenis }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">Rp{{ number_format($t->jumlah) }}</td>
                                    <td class="px-6 py-4">{{ $t->tanggal }}</td>
                                    <td class="px-6 py-4">{{ $t->keterangan }}</td>
                                    <td class="px-6 py-4 space-x-2">
                                        <a href="{{ route('transaksi.edit', $t->id) }}"
                                            class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-3 py-1 rounded">
                                            Edit
                                        </a>
                                        <form action="{{ route('transaksi.destroy', $t->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin ingin hapus?')"
                                                class="inline-block bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
