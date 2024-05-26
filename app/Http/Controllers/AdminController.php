<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $c_barang = Barang::count();
        $c_kategori = Kategori::count();
        return view('admin.dashboard', compact(['c_barang','c_kategori']));
    }
}
