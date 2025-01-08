<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    // Menampilkan semua data pengeluaran
    public function index()
    {
        $pengeluarans = pengeluaran::all();
        return view('admin.pengeluarans.index', compact('pengeluarans'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('admin.pengeluarans.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
            'jumlah_pengeluaran' => 'required|numeric|min:0',
        ]);

        Pengeluaran::create([
            'keterangan' => $request->keterangan,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
        ]);

        return redirect()->route('keluar.index')->with('success', 'Pengeluaran berhasil ditambahkan.');
    }

    // Menampilkan detail data pengeluaran
    public function show($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('admin.pengeluarans.show', compact('pengeluaran'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('admin.pengeluarans.edit', compact('pengeluaran'));
    }

    // Mengupdate data di database
    public function update(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);

        $request->validate([
            'keterangan' => 'required|string|max:255',
            'jumlah_pengeluaran' => 'required|numeric|min:0',
        ]);

        $pengeluaran->update([
            'keterangan' => $request->keterangan,
            'jumlah_pengeluaran' => $request->jumlah_pengeluaran,
        ]);

        return redirect()->route('pengeluarans.index')->with('success', 'Pengeluaran berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->delete();
        return redirect()->route('keluar.index')->with('success', 'Pengeluaran berhasil dihapus.');
    }
}
