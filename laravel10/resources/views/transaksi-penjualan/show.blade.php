@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Transaksi Penjualan</h1>
    <p>ID: {{ $transaksi->id }}</p>
    <p>Produk: {{ $transaksi->produk_id }}</p>
    <p>Jumlah: {{ $transaksi->jumlah }}</p>
    <p>Total Harga: {{ $transaksi->total_harga }}</p>
    <p>Tanggal Transaksi: {{ $transaksi->tanggal_transaksi }}</p>
    <a href="{{ route('transaksi-penjualans.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
