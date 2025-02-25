<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan profil pengguna berdasarkan id dan name
     *
     * @param int $id
     * @param string $name
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id, $name)
    {
        // Opsional: Tambahkan validasi atau pengambilan data pengguna
        return view('user.profile', compact('id', 'name'));
    }
}
