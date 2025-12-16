@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-2">🏠 Dashboard Donlight</h1>
<p class="mb-6">
    Selamat datang, <b>{{ $user->username }}</b>  
    <span class="text-gray-600">(Role: {{ $user->role }})</span>
</p>

{{-- STATISTIK --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

    <div class="bg-white shadow rounded p-5">
        <p class="text-gray-500">Total Produk</p>
        <h2 class="text-3xl font-bold">{{ $data['totalProduk'] }}</h2>
    </div>

    <div class="bg-white shadow rounded p-5">
        <p class="text-gray-500">Total Customer</p>
        <h2 class="text-3xl font-bold">{{ $data['totalCustomer'] }}</h2>
    </div>

    <div class="bg-white shadow rounded p-5">
        <p class="text-gray-500">Total Transaksi</p>
        <h2 class="text-3xl font-bold">{{ $data['totalTransaksi'] }}</h2>
    </div>

</div>

{{-- MENU SESUAI ROLE --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">

    @if(in_array($user->role, ['owner', 'admin']))
        <a href="{{ route('produk.index') }}" class="bg-pink-500 text-white p-4 rounded text-center">
            📦 Data Produk
        </a>

        <a href="{{ route('customer.index') }}" class="bg-pink-500 text-white p-4 rounded text-center">
            👥 Data Customer
        </a>
    @endif

    @if(in_array($user->role, ['owner', 'admin', 'kasir']))
        <a href="{{ route('transaksi.index') }}" class="bg-pink-500 text-white p-4 rounded text-center">
            💳 Transaksi
        </a>
    @endif

</div>
@endsection
