@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Data Transaksi</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaksi as $t)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->created_at }}</td>
                    <td>Rp {{ number_format($t->total ?? 0) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada transaksi</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
