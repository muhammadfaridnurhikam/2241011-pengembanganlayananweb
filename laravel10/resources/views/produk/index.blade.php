@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Supplier</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->deskripsi }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>{{ $produk->kategori->nama }}</td>
                    <td>{{ $produk->supplier->nama }}</td>
                    <td>
                        <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
