@extends('layouts.page.master')

@section('title', 'Status Order di Furniture Max')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .product-image {
            max-width: 150px; /* Atur ukuran sesuai kebutuhan */
            height: auto;
        }
        .product-container {
            max-width: 33.33%; /* Mengatur agar maksimal 3 produk dalam satu baris */
            margin-right: 4rem; /* Menambahkan jarak antara produk */
            margin-bottom: 1rem; /* Menambahkan jarak antara baris produk */
        }
        .rating-stars {
            font-size: 1.6rem; /* Membuat ukuran bintang lebih besar */
            color: #e4e5e9; /* Warna bintang default (putih) */
        }
        .rating-stars .bi-star-fill.active {
            color: #FFD700; /* Warna emas untuk bintang aktif */
        }
        .btn-sage {
            background-color: #93D459; /* Warna Sage */
            color: white;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid p-5" style="background-color: #e6c7ab">
    <div class="container">
        <h1 class="fw-bold px-4 fs-2"><i class="bi bi-list-task text-sage"></i> Status Order</h1>
    </div>
</div>
<div class="container p-4" style="min-height:83.3vh">
    <a href="/" class="btn btn-primary">Kembali</a>
    <div class="row gap-y-4 mt-4">
        <div class="col-sm-12 col-md-6">
            <div class="card border-none border-5 border-start border-bottom rounded-none" style="border-color: #93D459!important">
                <div class="card-body">
                  <div class="d-flex flex-wrap">
                      <div class="product-container">
                          <h3 class="card-title fw-bold fs-5">Sofa Ruang Tamu</h3>
                          <img src="{{ asset('assets/img/produk/sofa ruang tamu.png') }}" alt="Gambar Produk 1" class="img-fluid mb-3 product-image">
                      </div>
                      <div class="product-container">
                          <h3 class="card-title fw-bold fs-5">Kasur Tidur</h3>
                          <img src="{{ asset('assets/img/produk/Kasur Tidur.png') }}" alt="Gambar Produk 2" class="img-fluid mb-3 product-image">
                      </div>
                      <div class="product-container">
                          <h3 class="card-title fw-bold fs-5">Handuk</h3>
                          <img src="{{ asset('assets/img/produk/Handuk.png') }}" alt="Gambar Produk 3" class="img-fluid mb-3 product-image">
                      </div>
                  </div>
                  <p class="card-text my-2">Total Harga: Rp. 2.600.000</p>
                  <button class="btn btn-success" disabled>Selesai</button>
                  <a href="{{ route('order-detail') }}" class="btn btn-info ms-2">Detail Order</a>
                  <div class="mt-3 rating-stars">
                      <i class="bi bi-star-fill" data-index="0"></i>
                      <i class="bi bi-star-fill" data-index="1"></i>
                      <i class="bi bi-star-fill" data-index="2"></i>
                      <i class="bi bi-star-fill" data-index="3"></i>
                      <i class="bi bi-star-fill" data-index="4"></i>
                  </div>
                  <button class="btn btn-sage mt-2">Berikan Rating</button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card border-none border-5 border-start border-bottom rounded-none" style="border-color: #93D459!important">
                <div class="card-body">
                  <h3 class="card-title fw-bold fs-5">Sofa Ruang Tamu</h3>
                  <div class="d-flex flex-wrap">
                      <div class="product-container">
                          <img src="{{ asset('assets/img/produk/sofa ruang tamu.png') }}" alt="Gambar Produk 1" class="img-fluid mb-3 product-image">
                      </div>
                  </div>
                  <p class="card-text my-2">Total Harga: Rp. 1.000.000</p>
                  <button class="btn btn-warning" disabled>Pending</button>
                  <a href="{{ route('order-detail') }}" class="btn btn-info ms-2">Detail Order</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer', true)

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.rating-stars .bi-star-fill');
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
        });
    });
</script>
