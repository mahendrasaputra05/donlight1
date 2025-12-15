@extends('layouts.app')

@section('content')
<h3>Tambah Produk</h3>

<form method="POST" action="{{ route('produk.store') }}">
    @csrf
    <input class="form-control mb-2" name="nama_produk" placeholder="Nama Produk">
    <input class="form-control mb-2" name="harga" placeholder="Harga">
    <input class="form-control mb-2" name="stock" placeholder="Stock">

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
