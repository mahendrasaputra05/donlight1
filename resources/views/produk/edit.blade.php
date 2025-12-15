@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Produk</h3>

    <form method="POST" action="{{ route('produk.update', $produk->id_produk) }}">
        @csrf
        @method('PUT')

        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control mb-2">
        <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control mb-2">
        <input type="number" name="stock" value="{{ $produk->stock }}" class="form-control mb-2">

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
