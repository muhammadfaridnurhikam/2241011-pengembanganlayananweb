@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga">
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="text" class="form-control" id="stok" name="stok">
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori:</label>
            <select class="form-control" id="kategori_id" name="kategori_id">
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="supplier_id">Supplier:</label>
            <select class="form-control" id="supplier_id" name="supplier_id">
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
