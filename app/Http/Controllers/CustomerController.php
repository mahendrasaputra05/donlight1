<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email',
            'telp'  => 'required',
        ]);

        Customer::create([
            'nama'  => $request->nama,
            'email' => $request->email,
            'telp'  => $request->telp,
        ]);

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil ditambahkan');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|email',
            'telp'  => 'required',
        ]);

        $customer->update([
            'nama'  => $request->nama,
            'email' => $request->email,
            'telp'  => $request->telp,
        ]);

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil diupdate');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil dihapus');
    }
}
