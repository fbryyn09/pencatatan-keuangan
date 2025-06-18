<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPemasukan = Transaksi::where('jenis', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaksi::where('jenis', 'pengeluaran')->sum('jumlah');
        $saldo = $totalPemasukan - $totalPengeluaran;

        return view('dashboard', compact('totalPemasukan', 'totalPengeluaran', 'saldo'));
    }
}
