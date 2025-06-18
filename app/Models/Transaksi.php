<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'kategori',
        'jenis',
        'jumlah',
        'tanggal',
        'keterangan',
    ];
}
