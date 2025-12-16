@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">💳 Data Transaksi</h1>

<a href="{{ route('transaksi.create') }}"
   class="inline-block mb-4 bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
   + Transaksi Baru
</a>

<div class="bg-white shadow rounded overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Tanggal</th>
                <th class="p-3 text-left">Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transaksi as $item)
                <tr class="border-t">
                    <td class="p-3">{{ $loop->iteration }}</td>
                    <td class="p-3">{{ $item->created_at->format('d-m-Y') }}</td>
                    <td class="p-3">
                        Rp {{ number_format($item->total ?? 0,0,',','.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="p-4 text-center text-gray-500">
                        Belum ada transaksi
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
