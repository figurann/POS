<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Metode untuk menampilkan kategori produk
     *
     * @param string $category Nama kategori produk
     * @param string $title Judul kategori
     * @return \Illuminate\Contracts\View\View
     */
    private function showCategory($category, $title)
    {
        return view("products.{$category}", compact('title'));
    }

    public function foodBeverage()
    {
        return $this->showCategory('food-beverage', 'Food & Beverage');
    }

    public function beautyHealth()
    {
        return $this->showCategory('beauty-health', 'Beauty & Health');
    }

    public function homeCare()
    {
        return $this->showCategory('home-care', 'Home Care');
    }

    public function babyKid()
    {
        return $this->showCategory('baby-kid', 'Baby & Kid');
    }
}
