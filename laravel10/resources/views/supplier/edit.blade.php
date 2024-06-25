@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Supplier</h1>
    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $supplier->nama }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $supplier->alamat }}">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $supplier->telepon }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $supplier->email }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
