<?php

namespace App\Http\Controllers;

use App\Events\BulanCreated;
use App\Models\bulanPembayaran;
use App\Models\pengeluaran;
use App\Models\uangKass;
use Illuminate\Http\Request;

class BulanController extends Controller
{
    public function index()
    {
        $bulanPembayarans = bulanPembayaran::all();
        $kas = uangKass::all()->sum('bayar');
        $pengeluaran = pengeluaran::all()->sum('jumlah_pengeluaran');
        $totalBayar = $kas - $pengeluaran;
        return view('admin.bulan.index', compact('bulanPembayarans' ,'totalBayar','pengeluaran','kas'));
    }
    public function create()
    {
        return view('admin.bulan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|integer',
            'bulan' => 'required|in:januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
        ]);

        $bulan = bulanPembayaran::create([
            'tahun' => $request->tahun,
            'bulan' => $request->bulan,
        ]);
        event(new BulanCreated($bulan));

        return redirect()->route('bulan.index')->with('success', 'Bulan pembayaran berhasil ditambahkan.');
    }
    public function show($id)
    {
        $bulanPembayaran = bulanPembayaran::findOrFail($id);
        return view('admin.bulan_pembayarans.show', compact('bulanPembayaran'));
    }
    public function showByBulan($bulanId)
    {
        $uangKasses = uangKass::with('siswa')->where('bulan_id', $bulanId)->get();
        $bulan = bulanPembayaran::findOrFail($bulanId);
        $totalBayar = uangKass::where('bulan_id', $bulanId)->sum('bayar');

        return view('admin.kas.index', compact('uangKasses','bulan','totalBayar'));
    }
    public function edit($id)
    {
        $bulanPembayaran = BulanPembayaran::findOrFail($id);
        return view('admin.bulan_pembayarans.edit', compact('bulanPembayaran'));
    }

    public function update(Request $request, $id)
    {
        $bulanPembayaran = bulanPembayaran::findOrFail($id);

        $request->validate([
            'tahun' => 'required|integer',
            'bulan' => 'required|in:januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember',
        ]);

        $bulanPembayaran->update([
            'tahun' => $request->tahun,
            'bulan' => $request->bulan,
        ]);

        return redirect()->route('bulan_pembayarans.index')->with('success', 'Bulan pembayaran berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $bulanPembayaran = bulanPembayaran::findOrFail($id);
        $bulanPembayaran->delete();
        return redirect()->route('bulan.index')->with('success', 'Bulan pembayaran berhasil dihapus.');
    }
}
