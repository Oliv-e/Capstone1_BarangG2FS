<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
        // limiter display
        // $barang = Barang::all()->take(1);
        $barang = Barang::all();
        return view('welcome', compact('barang'));
    }

    public function promo() {
        return view('page.promo.list-promo');
    }
    public function detailPromo() {
        return view('page.promo.detail-promo');
    }

    public function detailProduk() {
        return view('page.produk.detail-produk');
    }

    public function listProduk(Request $request) {
        $categories = [
            1 => 'Ruang Tamu',
            2 => 'Kamar Mandi',
            3 => 'Kamar Tidur'
        ];
        $selectedCategory = $request->get('category', 1);
        $search = $request->get('search', '');

        $products = Barang::where('id_kategori', $selectedCategory)
                            ->where('nama', 'like', "%$search%")
                            ->where('diarsipkan', 'false')
                            ->paginate(10);

        return view('page.produk.list-produk', compact('categories', 'selectedCategory', 'products', 'search'));
    }

}
