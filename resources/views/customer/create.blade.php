@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Customer</h3>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
