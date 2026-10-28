@extends('layouts.app')

@section('title', 'Edit Penjualan')

@section('content')
<div class="topbar">
    <div>
        <h1>Edit Transaksi</h1>
        <p class="muted">Perbarui data transaksi yang dipilih.</p>
    </div>
    <a class="btn" href="{{ route('penjualan.index') }}">Kembali</a>
</div>

<div class="card">
    <form action="{{ route('penjualan.update', $penjualan) }}" method="POST">
        @csrf
        @method('PUT')
        @include('penjualan._form')

        <div class="actions" style="margin-top: 18px;">
            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
            <a class="btn" href="{{ route('penjualan.index') }}">Batal</a>
        </div>
    </form>
</div>
@endsection