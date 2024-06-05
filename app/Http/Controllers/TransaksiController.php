<?php
namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class TransaksiController extends Controller
{
    
    public function index()
    {
 
        $detailTransaksis = DetailTransaksi::with(['barang', 'transaksi'])->get();
    

        $groupedTransaksis = $detailTransaksis->groupBy('id_transaksi');
    

        $formattedTransaksis = $groupedTransaksis->map(function ($items) {
            $productName = $items->pluck('barang.nama')->implode(', '); 
            $firstItem = $items->first();

            return [
                'id_transaksi' => $firstItem->id_transaksi,
                'nama_produk' => $productName,
                'nama_pembeli' => $firstItem->transaksi->nama_pembeli,
                'nomor_hp' => $firstItem->transaksi->nomor_hp, 
                'alamat' => $firstItem->transaksi->alamat,
                'status' => $firstItem->status, 
            ];
        });
    

        return view('admin.transaksi.main', ['formattedTransaksis' => $formattedTransaksis]);
    }
    

    public function show($id)
    {
        $transaksi = Transaksi::with('detailTransaksi.barang')->findOrFail($id);
        return view('admin.transaksi.detail_transaksi', compact('transaksi'));
    }

    public function proses($id)
{

    DetailTransaksi::where('id_transaksi', $id)->update(['status' => 'proses']);


    return redirect()->route('admin.transaksi.detail_transaksi', $id)->with('success', 'Transaksi telah diproses.');
}

public function detail($id)
{

    $transaksi = Transaksi::findOrFail($id);
    

    return view('admin.transaksi.detail_transaksi', compact('transaksi'));
}


}
