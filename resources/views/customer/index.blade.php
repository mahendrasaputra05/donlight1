@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">👥 Data Customer</h1>

<a href="{{ route('customer.create') }}"
   class="inline-block mb-4 bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
   + Tambah Customer
</a>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Telepon</th>
            <th class="p-3 text-left">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($customer as $item)
            <tr class="border-t">
                <td class="p-3">{{ $item->nama }}</td>
                <td class="p-3">{{ $item->email }}</td>
                <td class="p-3">{{ $item->telp }}</td>
                <td class="p-3 space-x-2">

                    <a href="{{ route('customer.edit', $item) }}"
                       class="text-blue-600 hover:underline">
                        Edit
                    </a>

                    <form action="{{ route('customer.destroy', $item) }}"
                          method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline"
                            onclick="return confirm('Hapus customer ini?')">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="p-4 text-center text-gray-500">
                    Data customer belum ada
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
