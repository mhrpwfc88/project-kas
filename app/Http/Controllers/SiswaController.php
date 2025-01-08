<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Menampilkan semua data siswa
    public function index()
    {
        $siswas = Siswa::all();
        return view('admin.siswa.index', compact('siswas'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('admin.siswa.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:siswas|max:255',
            'no_telepon' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan,hidden',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('siswas.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    // Menampilkan detail data siswa
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.show', compact('siswa'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.siswa.edit', compact('siswa'));
    }

    // Mengupdate data di database
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nama' => 'required|unique:siswas,nama,' . $siswa->id . '|max:255',
            'no_telepon' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan,hidden',
        ]);

        $siswa->update([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}