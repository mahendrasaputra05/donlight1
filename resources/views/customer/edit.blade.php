@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Customer</h3>

    <form action="{{ route('customer.update', $customer->id_customer) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama"
                   class="form-control"
                   value="{{ $customer->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email"
                   class="form-control"
                   value="{{ $customer->email }}" required>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      required>{{ $customer->alamat }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('customer.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
