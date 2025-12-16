@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">➕ Tambah Customer</h1>

<form action="{{ route('customer.store') }}" method="POST" class="max-w-lg space-y-4">
    @csrf

    <div>
        <label class="block mb-1 font-semibold">Nama</label>
        <input type="text"
               name="nama"
               class="w-full border rounded p-2"
               required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email"
               name="email"
               class="w-full border rounded p-2"
               required>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Telepon</label>
        <input type="text"
               name="telp"
               class="w-full border rounded p-2"
               required>
    </div>

    <div class="flex gap-3">
        <button type="submit"
                class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
            Simpan
        </button>

        <a href="{{ route('customer.index') }}"
           class="px-4 py-2 border rounded">
            Kembali
        </a>
    </div>
</form>
@endsection
