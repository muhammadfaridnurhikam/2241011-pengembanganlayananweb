@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Supplier</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $supplier->nama }}</h5>
            <p class="card-text">Alamat: {{ $supplier->alamat }}</p>
            <p class="card-text">Telepon: {{ $supplier->telepon }}</p>
            <p class="card-text">Email: {{ $supplier->email }}</p>
            <a href="{{ route('supplier.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
