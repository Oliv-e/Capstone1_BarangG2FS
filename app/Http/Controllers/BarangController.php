<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('admin.barang.home', compact('barang'));
    }
    public function create()
    {
        $kategori = kategori::all();
        return view('admin.barang.create', compact('kategori'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_kategori' => 'required|integer',
            'gambar' => 'required|image|max:2048|mimes:png,jpg,jpeg',
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'harga' => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/gambar/barang', $gambar->hashName());

        Barang::create([
            'id_kategori' => $request->id_kategori,
            'gambar' => $gambar->hashName(),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'diarsipkan' => 'false',
        ]);

        return redirect(route('barang.index'))->with('success','Barang Berhasil Dibuat!!!');
    }
    public function edit(String $id)
    {
        $selected_barang = Barang::findOrFail($id);
        // dd($selected_barang);
        $kategori = kategori::all();
        return view('admin.barang.edit', compact(['kategori','selected_barang']));
    }
    public function update(Request $request, String $id)
    {
        $this->validate($request,[
            'id_kategori' => 'required|integer',
            'gambar' => 'image|max:2048|mimes:png,jpg,jpeg',
            'nama' => 'required|min:5',
            'deskripsi' => 'required|min:10',
            'harga' => 'required'
        ]);

        $barang = Barang::findOrFail($id);

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/gambar/barang', $gambar->hashName());
            Storage::delete('public/gambar/barang/'. $barang->gambar);
            $barang->update([
                'id_kategori' => $request->id_kategori,
                'gambar' => $gambar->hashName(),
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'diarsipkan' => 'false',
            ]);
        } else {
            $barang->update([
                'id_kategori' => $request->id_kategori,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'diarsipkan' => 'false',
            ]);
        }

        return redirect(route('barang.index'))->with('success','Barang Berhasil Diedit!!!');
    }
    public function destroy(String $id) {
        $selected_barang = Barang::findOrFail($id);
        Storage::delete('public/gambar/barang/'. $selected_barang->gambar);

        $selected_barang->delete();
        return redirect(route('barang.index'))->with('success','Data Berhasil di Hapus');
    }
}
