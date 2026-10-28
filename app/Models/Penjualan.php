<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'nama_pelanggan',
        'nama_produk',
        'jumlah',
        'harga_satuan',
        'total',
        'status',
        'catatan',
    ];

    protected function casts(): array
    {
        return [
            'tanggal' => 'date',
            'harga_satuan' => 'decimal:2',
            'total' => 'decimal:2',
        ];
    }
}