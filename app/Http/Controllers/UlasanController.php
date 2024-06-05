<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan; // Import model Ulasan
use Illuminate\Support\Facades\Auth; // Import facade Auth

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ulasan = Ulasan::all();
        return view('page.produk.detail-produk', compact('ulasan')); // Ubah 'Ulasan' menjadi 'ulasan'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $barang_id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required|string',
        ]);

        Ulasan::create([
            'id_user' => Auth::id(), // Ubah 'user_id' menjadi 'id_user'
            'id_barang' => $barang_id,
            'rate' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return redirect()->back()->with('success', 'Ulasan Anda telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data produk berdasarkan ID
        $produk = Produk::findOrFail($id);
        
        // Menghitung rating produk
        $rating = Ulasan::where('produk_id', $produk->id)
                        ->avg('rating');
        
        // Menyimpan rating ke dalam data produk
        $produk->rating = $rating;
        
        // Mengambil ulasan produk
        $ulasan = Ulasan::where('produk_id', $produk->id)
                        ->get();
        
        // Mengirim data produk dan ulasan ke halaman detail produk
        return view('detail_produk', compact('produk', 'ulasan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
