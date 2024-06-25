@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transaksi Penjualan</h1>
    <a href="{{ route('transaksi-penjualans.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->produk_id }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>{{ $transaksi->total_harga }}</td>
                    <td>{{ $transaksi->tanggal_transaksi }}</td>
                    <td>
                        <a href="{{ route('transaksi-penjualans.show', $transaksi->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('transaksi-penjualans.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksi-penjualans.destroy', $transaksi->id) }}" method="POST" style="display:inline-block;">
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
