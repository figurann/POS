<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Menampilkan halaman penjualan
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Opsional: Tambahkan logika untuk mengambil data penjualan
        return view('sales.index', [
            'title' => 'Halaman Penjualan',
            // Tambahkan data penjualan jika diperlukan
        ]);
    }
}
