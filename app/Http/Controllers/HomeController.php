<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Customer;
use App\Models\Transaksi;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $data = [
            'totalProduk' => Produk::count(),
            'totalCustomer' => Customer::count(),
            'totalTransaksi' => Transaksi::count(),
        ];

        return view('home.index', compact('user', 'data'));
    }
}
