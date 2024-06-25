@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Supplier</h1>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah Supplier</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->nama }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->telepon }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>
                        <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" class="d-inline">
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
