@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Supplier</h1>
    <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
