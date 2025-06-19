<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Box -->
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg mt-6">
                <div class="p-6 text-gray-700 text-center text-lg font-medium">
                    {{ __("Selamat datang di aplikasi pencatatan keuangan!") }}
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <!-- Pemasukan -->
                <div class="bg-green-100 text-green-800 p-6 rounded-xl shadow-md text-center transition transform hover:scale-105">
                    <h3 class="text-lg font-semibold">Total Pemasukan</h3>
                    <p class="text-2xl font-bold mt-2">Rp{{ number_format($totalPemasukan) }}</p>
                </div>

                <!-- Pengeluaran -->
                <div class="bg-red-100 text-red-800 p-6 rounded-xl shadow-md text-center transition transform hover:scale-105">
                    <h3 class="text-lg font-semibold">Total Pengeluaran</h3>
                    <p class="text-2xl font-bold mt-2">Rp{{ number_format($totalPengeluaran) }}</p>
                </div>

                <!-- Saldo -->
                <div class="bg-blue-100 text-blue-800 p-6 rounded-xl shadow-md text-center transition transform hover:scale-105">
                    <h3 class="text-lg font-semibold">Saldo Sekarang</h3>
                    <p class="text-2xl font-bold mt-2">Rp{{ number_format($saldo) }}</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
