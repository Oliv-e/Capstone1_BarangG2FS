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
                    <input type="text" class="form-control form-control-no-border" value="John Doe" disabled>
                </div>
                <div class="col-md-6">
                    <strong>Alamat:</strong>
                    <textarea class="form-control form-control-no-border" rows="3" disabled>Jl. Kebon Jeruk No. 10</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Nomor HP:</strong>
                    <input type="text" class="form-control form-control-no-border" value="081234567890" disabled>
                </div>
                <div class="col-md-6">
                    <strong>Pengiriman:</strong>
                    <select class="form-select" disabled>
                        <option value="ninja-express" selected>Ninja Express</option>
                        <option value="jnt-cargo">JNT Cargo</option>
                        <option value="jne-cargo">JNE Cargo</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 d-flex align-items-center">
                    <img src="{{ asset('assets/img/produk/sofa ruang tamu.png') }}" class="img-fluid product-image" alt="Gambar Produk" style="max-width: 100px;">
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Nama Produk:</strong>
                        <p class="fs-5">Sofa Ruang Tamu</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Harga Produk:</strong>
                        <p class="fs-5">Rp. 500.000</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Jumlah Produk:</strong>
                        <div class="quantity-control">
                            <input type="number" id="quantity" value="2" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 d-flex align-items-center">
                    <img src="{{ asset('assets/img/produk/Kasur Tidur.png') }}" class="img-fluid product-image" alt="Gambar Produk" style="max-width: 100px;">
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Nama Produk:</strong>
                        <p class="fs-5">Kasur Tidur</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Harga Produk:</strong>
                        <p class="fs-5">Rp. 2.000.000</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <div>
                        <strong>Jumlah Produk:</strong>
                        <div class="quantity-control">
                            <input type="number" id="quantity" value="1" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>Total Harga:</strong>
                    <p class="total-price" id="totalPrice">Rp. 2.500.000</p>
                </div></div>

            <div class="row mb-3">
                <div class="col-md-6 text-end offset-md-6">
                <button class="btn btn-success" disabled>Selesai</button>
                <button class="btn bg-red text-white" onclick="window.location.href='#';">Batalkan Pesanan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer', true)