<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Tampilkan daftar pengguna.
     */
    public function index()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.users.index', compact('users')); // Tampilkan ke view
    }

    /**
     * Tampilkan form untuk membuat user baru.
     */
    public function create()
    {
        return view('admin.users.create'); // Tampilkan form untuk menambah user
    }

    /**
     * Simpan user baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:user,admin', // Validasi role
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Simpan user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Enkripsi password
        // $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail user.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user')); // Tampilkan detail user
    }

    /**
     * Tampilkan form untuk mengedit user.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user')); // Tampilkan form edit
    }

    /**
     * Perbarui data user.
     */
    public function update(Request $request, User $user)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            // 'role' => 'required|in:user,admin', 
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.edit', $user->id)
                             ->withErrors($validator)
                             ->withInput();
        }

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password); // Enkripsi password jika diubah
        }
        // $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Hapus user.
     */
    public function destroy(User $user)
    {
        $user->delete(); // Hapus user
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}

