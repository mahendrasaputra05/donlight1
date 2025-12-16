@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">➕ Transaksi Baru</h1>

<form action="{{ route('transaksi.store') }}" method="POST" class="max-w-xl space-y-4">
    @csrf

    {{-- CUSTOMER --}}
    <div>
        <label class="block mb-1 font-semibold">Customer</label>
        <select name="customer_id"
                class="w-full border rounded p-2"
                required>
            <option value="">-- Pilih Customer --</option>
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">
                    {{ $customer->nama }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- PRODUK --}}
    <div>
        <label class="block mb-1 font-semibold">Produk</label>
        <select name="produk_id"
                class="w-full border rounded p-2"
                required>
            <option value="">-- Pilih Produk --</option>
            @foreach($produk as $item)
                <option value="{{ $item->id }}">
                    {{ $item->nama }} - Rp {{ number_format($item->harga,0,',','.') }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- JUMLAH --}}
    <div>
        <label class="block mb-1 font-semibold">Jumlah</label>
        <input type="number"
               name="jumlah"
               min="1"
               class="w-full border rounded p-2"
               required>
    </div>

    <div class="flex gap-3">
        <button type="submit"
                class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
            Simpan
        </button>

        <a href="{{ route('transaksi.index') }}"
           class="px-4 py-2 border rounded">
            Kembali
        </a>
    </div>
</form>
@endsection
