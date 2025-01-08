<?php

namespace App\Http\Controllers;

use App\Models\bulanPembayaran;
use App\Models\siswa;
use App\Models\uangKass;
use Illuminate\Http\Request;

class UangKasessController extends Controller
{

    public function index()
    {
        $uangKasses = uangKass::with(['siswa', 'bulan'])->get();
        return view('admin.uang_kasses.index', compact('uangKasses'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $bulanPembayarans = BulanPembayaran::all();
        return view('admin.uang_kasses.create', compact('siswas', 'bulanPembayarans'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'bulan_id' => 'required|exists:bulan_pembayarans,id',
            'bayar' => 'required|numeric|min:0',
        ]);

        uangKass::create([
            'siswa_id' => $request->siswa_id,
            'bulan_id' => $request->bulan_id,
            'bayar' => $request->bayar,
        ]);

        return redirect()->route('uang_kasses.index')->with('success', 'Uang kasse berhasil ditambahkan.');
    }

    // Menampilkan detail data uang kasse
    public function show($id)
    {
        $uangKasse = uangKass::with(['siswa', 'bulan'])->findOrFail($id);
        return view('admin.uang_kasses.show', compact('uangKasse'));
    }

    public function edit($id)
    {
        $kas = uangKass::findOrFail($id);
        $siswas = siswa::all();
        $bulan = bulanPembayaran::all();
        return view('admin.kas.edit', compact('kas', 'siswas', 'bulan'));
    }

    // Mengupdate data di database
    public function update(Request $request, $id)
    {
        $uangKasse = uangKass::findOrFail($id);

        $request->validate([
            'bayar' => 'required|numeric|min:0',
        ]);

        $uangKasse->update([
            'bayar' => $request->bayar,
        ]);

        return redirect()->route('bulan.kas', $uangKasse->bulan_id)->with('success', 'Uang kas berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $uangKasse = uangKass::findOrFail($id);
        $uangKasse->delete();
        return redirect()->route('uang_kasses.index')->with('success', 'Uang kasse berhasil dihapus.');
    }
}
