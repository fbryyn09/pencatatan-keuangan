<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Transaksi
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-800 border border-gray-200">

                <div class="flex justify-end mb-4">
                    <a href="{{ route('transaksi.create') }}"
                        class="inline-block bg-green-600 hover:bg-green-800 text-white font-semibold px-4 py-2 rounded transition duration-200">
                        <i class="fas fa-plus mr-1"></i> Tambah Transaksi
                    </a>
                </div>


                <div class="overflow-x-auto rounded-lg border border-gray-200">
                    <table class="w-full text-sm text-center text-gray-700">
                        <thead class="text-xs uppercase bg-blue-600 text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3">No</th>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Jenis</th>
                                <th scope="col" class="px-6 py-3">Jumlah</th>
                                <th scope="col" class="px-6 py-3">Tanggal</th>
                                <th scope="col" class="px-6 py-3">Keterangan</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $index => $t)
                                <tr class="hover:bg-gray-50 even:bg-gray-50 border-b border-gray-200 transition">
                                    <td class="px-6 py-4">{{ $index + 1 }}.</td>
                                    <td class="px-6 py-4">{{ ucfirst($t->kategori) }}</td>
                                    <td class="px-6 py-4">
                                        @if ($t->jenis === 'Pemasukan')
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                                                {{ $t->jenis }}
                                            </span>
                                        @else
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">
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
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('transaksi.destroy', $t->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin ingin hapus?')"
                                                class="inline-block bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded">
                                                <i class="fa-solid fa-trash"></i>
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
