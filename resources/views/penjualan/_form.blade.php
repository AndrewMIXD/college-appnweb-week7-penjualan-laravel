<div class="grid">
    <div>
        <label for="kode_transaksi">Kode Transaksi</label>
        <input
            id="kode_transaksi"
            name="kode_transaksi"
            value="{{ old('kode_transaksi', $penjualan->kode_transaksi ?? '') }}"
            placeholder="TRX-001"
        >
        @error('kode_transaksi') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="tanggal">Tanggal</label>
        <input
            id="tanggal"
            type="date"
            name="tanggal"
            value="{{ old('tanggal', isset($penjualan) ? $penjualan->tanggal->format('Y-m-d') : now()->format('Y-m-d')) }}"
        >
        @error('tanggal') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input
            id="nama_pelanggan"
            name="nama_pelanggan"
            value="{{ old('nama_pelanggan', $penjualan->nama_pelanggan ?? '') }}"
            placeholder="Nama pelanggan"
        >
        @error('nama_pelanggan') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="nama_produk">Nama Produk</label>
        <input
            id="nama_produk"
            name="nama_produk"
            value="{{ old('nama_produk', $penjualan->nama_produk ?? '') }}"
            placeholder="Nama produk"
        >
        @error('nama_produk') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="jumlah">Jumlah</label>
        <input
            id="jumlah"
            type="number"
            min="1"
            name="jumlah"
            value="{{ old('jumlah', $penjualan->jumlah ?? 1) }}"
        >
        @error('jumlah') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="harga_satuan">Harga Satuan</label>
        <input
            id="harga_satuan"
            type="number"
            min="0"
            step="0.01"
            name="harga_satuan"
            value="{{ old('harga_satuan', $penjualan->harga_satuan ?? '') }}"
            placeholder="25000"
        >
        @error('harga_satuan') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div>
        <label for="status">Status</label>
        <select id="status" name="status">
            @foreach (['Selesai', 'Pending', 'Batal'] as $status)
                <option
                    value="{{ $status }}"
                    @selected(old('status', $penjualan->status ?? 'Selesai') === $status)
                >
                    {{ $status }}
                </option>
            @endforeach
        </select>
        @error('status') <div class="error">{{ $message }}</div> @enderror
    </div>

    <div class="full">
        <label for="catatan">Catatan</label>
        <textarea id="catatan" name="catatan" placeholder="Opsional">{{ old('catatan', $penjualan->catatan ?? '') }}</textarea>
        @error('catatan') <div class="error">{{ $message }}</div> @enderror
    </div>
</div>