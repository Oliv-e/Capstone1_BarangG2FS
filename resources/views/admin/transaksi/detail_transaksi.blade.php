@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
    <p> >> CAPSTONE#1_FS2 / Dashboard / Detail Transaksi</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman detail transaksi untuk admin</h2>
            <a href="{{ route('transaksi.index') }}" class="btn bg-gradient-info">Kembali</a>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Pembelian</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nama Pembeli:</strong>
                        <p>{{ $order->nama_pembeli }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Alamat:</strong>
                        <p>{{ $order->alamat }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nomor HP:</strong>
                        <p>{{ $order->nomor_hp }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Pengiriman:</strong>
                        <p>{{ $order->pengiriman }}</p>
                    </div>
                </div>
                @foreach ($orderItems as $item)
                <div class="row mb-3">
                    <div class="col-md-3 d-flex align-items-center">
                        <img src="{{ asset($item->gambar_produk) }}" class="img-fluid product-image" alt="Gambar Produk">
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Nama Produk:</strong>
                            <p class="fs-5">{{ $item->nama_produk }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Harga Produk:</strong>
                            <p class="fs-5">Rp. {{ number_format($item->harga_produk, 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Jumlah Produk:</strong>
                            <p class="fs-5">{{ $item->jumlah_produk }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Total Harga:</strong>
                        <p class="total-price" id="totalPrice">Rp. {{ number_format($item->harga_produk * $item->jumlah_produk, 0, ',', '.') }}</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-warning" onclick="window.location.href='/dashboard/transaksi';">Proses</button>
                        <button class="btn btn-success ms-2" onclick="window.location.href='/dashboard/transaksi';">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
@endsection
