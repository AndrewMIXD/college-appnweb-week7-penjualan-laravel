@extends('layouts.app')

@section('title', 'Detail Penjualan')

@section('content')
<div class="topbar">
    <div>
        <h1>{{ $penjualan->kode_transaksi }}</h1>
        <p class="muted">Detail transaksi penjualan.</p>
    </div>
    <div class="actions">
        <a class="btn" href="{{ route('penjualan.index') }}">Kembali</a>
        <a class="btn btn-primary" href="{{ route('penjualan.edit', $penjualan) }}">Edit</a>
    </div>
</div>

<div class="card">
    <div class="grid">
        <div><strong>Tanggal</strong><p>{{ $penjualan->tanggal->format('d/m/Y') }}</p></div>
        <div><strong>Status</strong><p>{{ $penjualan->status }}</p></div>
        <div><strong>Pelanggan</strong><p>{{ $penjualan->nama_pelanggan }}</p></div>
        <div><strong>Produk</strong><p>{{ $penjualan->nama_produk }}</p></div>
        <div><strong>Jumlah</strong><p>{{ $penjualan->jumlah }}</p></div>
        <div><strong>Harga Satuan</strong><p>Rp {{ number_format((float) $penjualan->harga_satuan, 0, ',', '.') }}</p></div>
        <div class="full"><strong>Total</strong><p class="metric">Rp {{ number_format((float) $penjualan->total, 0, ',', '.') }}</p></div>
        <div class="full"><strong>Catatan</strong><p>{{ $penjualan->catatan ?: '-' }}</p></div>
    </div>
</div>
@endsection