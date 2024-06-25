@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kategori</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $kategori->nama }}</h5>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
