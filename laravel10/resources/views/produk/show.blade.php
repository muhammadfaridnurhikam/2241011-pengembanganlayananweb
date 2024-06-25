@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $produk->nama }}</h5>
            <p class="card-text">Deskripsi: {{ $produk->deskripsi }}</p>
            <p class="card-text">Harga: {{ $produk->harga }}</p>
            <p class="card-text">Stok: {{ $produk->stok }}</p>
            <p class="card-text">Kategori: {{ $produk->kategori->nama }}</p>
            <p class="card-text">Supplier: {{ $produk->supplier->nama }}</p>
            <a href="{{ route('produk.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
