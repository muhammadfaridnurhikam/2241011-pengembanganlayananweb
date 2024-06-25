@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Transaksi Penjualan</h1>
    <form action="{{ route('transaksi-penjualans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="produk_id">Produk</label>
            <input type="text" class="form-control" id="produk_id" name="produk_id" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" step="0.01" class="form-control" id="total_harga" name="total_harga" required>
        </div>
        <div class="form-group">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
