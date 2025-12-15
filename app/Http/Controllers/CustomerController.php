<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        Customer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil ditambahkan');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        $customer->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil diupdate');
    }

    public function destroy($id)
    {
        Customer::destroy($id);

        return redirect()->route('customer.index')
            ->with('success', 'Customer berhasil dihapus');
    }
}
