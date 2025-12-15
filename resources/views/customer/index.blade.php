@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Customer</h3>

    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-3">
        Tambah Customer
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $c)
            <tr>
                <td>{{ $c->nama }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->alamat }}</td>
                <td>
                    <a href="{{ route('customer.edit', $c->id_customer) }}"
                       class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('customer.destroy', $c->id_customer) }}"
                          method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
