@extends('layouts.app')

@section('title', 'Tambah Penjualan')

@section('content')
<div class="topbar">
    <div>
        <h1>Tambah Transaksi</h1>
        <p class="muted">Isi data transaksi penjualan baru.</p>
    </div>
    <a class="btn" href="{{ route('penjualan.index') }}">Kembali</a>
</div>

<div class="card">
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        @include('penjualan._form')

        <div class="actions" style="margin-top: 18px;">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a class="btn" href="{{ route('penjualan.index') }}">Batal</a>
        </div>
    </form>
</div>
@endsection