<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Detail_transaksi;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Menampilkan daftar order
    public function index()
    {
        $orders = [
            (object) [
                'id' => 1,
                'nama_pembeli' => 'John Doe',
                'alamat' => 'Jl. Kebon Jeruk No. 10',
                'nomor_hp' => '081234567890',
                'pengiriman' => 'Ninja Express',
                'created_at' => now()->subDays(2),
                'status' => 'Pending'
            ],
            (object) [
                'id' => 2,
                'nama_pembeli' => 'Jane Doe',
                'alamat' => 'Jl. Mangga Dua No. 5',
                'nomor_hp' => '081234567891',
                'pengiriman' => 'JNT Cargo',
                'created_at' => now()->subDays(1),
                'status' => 'Proses'
            ],
        ];
        return view('admin.transaksi.home', compact('orders'));
    }

    // Menampilkan detail order
    public function show($id)
    {
        // Data sementara untuk detail order
        $order = (object) [
            'id' => $id,
            'nama_pembeli' => 'John Doe',
            'alamat' => 'Jl. Kebon Jeruk No. 10',
            'nomor_hp' => '081234567890',
            'pengiriman' => 'Ninja Express',
            'created_at' => now()->subDays(2),
            'status' => 'Pending'
        ];

        $orderItems = [
            (object) [
                'nama_produk' => 'Sofa Ruang Tamu',
                'harga_produk' => 500000,
                'jumlah_produk' => 2,
                'gambar_produk' => 'assets/img/produk/sofa ruang tamu.png'
            ],
        ];

        return view('admin.transaksi.detail_transaksi', compact('order', 'orderItems'));
    }
}
