@extends('layouts.page.master')

@section('title', 'Detail Produk')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/page/detail-produk.css') }}">
@endsection

@section('content')
    <div class="container-fluid p-5" style="margin-top: 13px; background-color: #e6c7ab;">
        <div class="container">
            <h1 class="fw-bold px-4 fs-2"><i class="bi bi-info-circle-fill" style="color: #7C8046;"></i> DETAIL PRODUK</h1>
        </div>
    </div>
    <div class="container p-4" style="min-height: 83.3vh;">
        <a href="/list-produk" class="btn btn-primary">Kembali</a>
        <div class="card mt-4 border-none border-5 border-start rounded-none" style="border-color: #7C8046!important;">
            <div class="row g-0">
                <div class="col-md-4 product-image">
                    <img src="{{ asset('assets/img/produk/sofa ruang tamu.png') }}" class="img-fluid rounded-start" alt="Gambar Produk">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold fs-2">Sofa Ruang Tamu</h2>
                        <p class="kategori"><span class="bold">Kategori:</span></br> Ruang Tamu</p>
                        <p class="card-text my-2"><span class="bold">Deskripsi:</span></br> Sofa secara umum dapat diartikan sebagai kursi panjang yang memiliki lengan dan sandaran, 
                            berlapis busa dan upholstery (kain dan kulit pelapis). Istilah sofa berasal dari kata sopha yang memiliki arti sebagai tempat duduk seperti dipan (tempat tidur).</p>

                            <p class="card-text my-2 price"><strong>Harga: Rp. 500.000</strong></p>
                        <div class="rating my-2">
                            <strong class="me-2">Rating:</strong>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span>(4.5/5 dari 2 ulasan)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="fw-bold fs-3 mt-4"><i class="bi bi-star-fill" style="color: #7C8046;"></i> ULASAN PRODUK</h3>
        <div class="row gap-y-4 mt-4">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="review-title">Nama Pengulas</h5>
                                <p class="review-date"><small class="text-muted">Tanggal Ulasan: 20 Mei 2024</small></p>
                            </div>
                            <div class="stars text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                        <p class="review-text">Ulasan produk yang sangat detail dan memberikan informasi yang sangat berguna bagi calon pembeli.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="review-title">Nama Pengulas</h5>
                                <p class="review-date"><small class="text-muted">Tanggal Ulasan: 18 Mei 2024</small></p>
                            </div>
                            <div class="stars text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                        <p class="review-text">Ulasan produk yang cukup baik, memberikan gambaran yang jelas mengenai produk.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer', true)
