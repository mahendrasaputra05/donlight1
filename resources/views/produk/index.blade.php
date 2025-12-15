@extends('layouts.app')

@section('content')
<h3>Data Produk</h3>

<a href="{{ route('produk.create') }}" class="btn btn-primary mb-2">
    Tambah Produk
</a>

<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Aksi</th>
    </tr>

    @foreach ($produks as $p)
    <tr>
        <td>{{ $p->nama_produk }}</td>
        <td>Rp {{ number_format($p->harga) }}</td>
        <td>{{ $p->stock }}</td>
        <td>
            <a href="{{ route('produk.edit', $p->id_produk) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('produk.destroy', $p->id_produk) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
