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
}
