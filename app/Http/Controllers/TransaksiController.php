<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Customer;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::latest()->get();
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        $customers = Customer::all();
        $produk = Produk::all();
        return view('transaksi.create', compact('customers', 'produk'));
    }

    public function store(Request $request)
    {
        // sementara kosong dulu
        return redirect()->route('transaksi.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
