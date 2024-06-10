@extends('layouts.page.master')

@section('title', 'Detail Order Pembelian di Furniture Max')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/page/order.css') }}">
@endsection

@section('content')
    <div class="container-fluid p-5" style="background-color: #e6c7ab">
        <div class="container">
            <h1 class="fw-bold px-4 fs-2"><i class="bi bi-receipt text-sage" style="color: #7C8046;"></i> Detail Order Pembelian</h1>
        </div>
    </div>
    <div class="container p-4" style="min-height: 83.3vh;">
        <a href="/order-status" class="btn btn-primary mb-4">Kembali</a>
        <div class="card transaction-card">
            <div class="card-header transaction-header">
                <h3 class="card-title fw-bold fs-3">Detail Pembelian</h3>
            </div>
            <div class="card-body transaction-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nama Pembeli:</strong>
                        <input type="text" class="form-control form-control-no-border" value="{{ $order->nama_pembeli }}" disabled>
                    </div>
                    <div class="col-md-6">
                        <strong>Alamat:</strong>
                        <textarea class="form-control form-control-no-border" rows="3" disabled>{{ $order->alamat }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nomor HP:</strong>
                        <input type="text" class="form-control form-control-no-border" value="{{ $order->nomor_hp }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <strong>Pengiriman:</strong>
                    <select class="form-select" disabled>
                        <option value="ninja-express" selected>Ninja Express</option>
                        <option value="jnt-cargo">JNT Cargo</option>
                        <option value="jne-cargo">JNE Cargo</option>
                    </select>
                </div>
                <!-- Loop through order details and display product information -->
                @foreach ($details as $detailTransaksi)
                    <div class="row mb-3">
                        <div class="col-md-3 d-flex align-items-center">
                            <img src="{{ asset($detailTransaksi->image_url) }}" class="img-fluid product-image" alt="Gambar Produk" style="max-width: 100px;">
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            <div>
                                <strong>Nama Produk:</strong>
                                <p class="fs-5">{{ $detailTransaksi->nama_barang }}</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            <div>
                                <strong>Harga Produk:</strong>
                                <p class="fs-5">{{ $detailTransaksi->harga }}</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-center">
                            <div>
                                <strong>Jumlah Produk:</strong>
                                <div class="quantity-control">
                                    <input type="number" id="quantity" value="{{ $detailTransaksi->jumlah }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End loop -->

                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Total Harga:</strong>
                        <p class="total-price" id="totalPrice">
                            @php
                                $totalHarga = 0;
                                foreach ($details as $detailTransaksi) {
                                    $totalHarga += $detailTransaksi->harga * $detailTransaksi->jumlah;
                                }
                                echo 'Rp. ' . number_format($totalHarga, 0, ',', '.');
                            @endphp
                        </p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 text-end offset-md-6">
                        <button class="btn btn-success" disabled>Selesai</button>
                        <form action="{{ route('order.cancel', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-red text-white">Batalkan Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer', true)