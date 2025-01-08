<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        $pemasukans = Pemasukan::all();
        return view('admin.pemasukans.index', compact('pemasukans'));
    }

     public function create()
    {
        return view('admin.pemasukans.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'jumlah_pemasukan' => 'required|numeric|min:0',
        ]);

        Pemasukan::create([
            'keterangan' => $request->keterangan,
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
        ]);

        return redirect()->route('pemasukans.index')->with('success', 'Pemasukan berhasil ditambahkan.');
    }

    // Menampilkan detail data pemasukan
    public function show($id)
    {
        $pemasukan = pemasukan::findOrFail($id);
        return view('admin.pemasukans.show', compact('pemasukan'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        return view('admin.pemasukans.edit', compact('pemasukan'));
    }

    // Mengupdate data di database
    public function update(Request $request, $id)
    {
        $pemasukan = Pemasukan::findOrFail($id);

        $request->validate([
            'keterangan' => 'required|string|max:255',
            'jumlah_pemasukan' => 'required|numeric|min:0',
        ]);

        $pemasukan->update([
            'keterangan' => $request->keterangan,
            'jumlah_pemasukan' => $request->jumlah_pemasukan,
        ]);

        return redirect()->route('pemasukans.index')->with('success', 'Pemasukan berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $pemasukan->delete();
        return redirect()->route('pemasukans.index')->with('success', 'Pemasukan berhasil dihapus.');
    }
}
