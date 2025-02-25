<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama aplikasi
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            // Tambahkan data tambahan jika diperlukan
        ]);
    }
}
