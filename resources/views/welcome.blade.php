@extends('layouts.page.master')

@section('title', 'Welcome to Furniture Max')

@section('css-style')
    <link rel="stylesheet" href="{{ asset('assets/css/page/welcome.css') }}">
@endsection

@section('content')
    <section id="home" class="hero-section">
        <div class="hero-text">
            <h1>Furniture Max</h1>
            <p>Deskripsi singkat tentang website Furniture Max yang menawarkan berbagai macam furniture berkualitas tinggi dengan harga terjangkau.</p>
            <button class="shop-now-btn">Belanja Sekarang</button>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/img/produk/sofa header.png') }}" alt="Produk">
        </div>
    </section>

    <section id="promo" class="promo-section">
        <h2>Promo</h2>
        <div class="promo-products">
            <div class="product-card">
                <img src="{{ asset('assets/img/produk/kursi sofa.png') }}" alt="Sofa" class="product-image">
                <h3>Kursi Sofa</h3>
                <p class="normal-price">Rp 1.000.000</p>
                <p class="promo-price">Rp 800.000</p>
                <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/img/produk/meja kecil.png') }}" alt="Table" class="product-image">
                <h3>Meja Kecil</h3>
                <p class="normal-price">Rp 500.000</p>
                <p class="promo-price">Rp 400.000</p>
                <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/img/produk/kursi.png') }}" alt="Chair" class="product-image">
                <h3>Kursi Chill</h>
                <p class="normal-price">Rp 300.000</p>
                <p class="promo-price">Rp 250.000</p>
                <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/img/produk/meja belajar.png') }}" alt="Desk" class="product-image">
                <h3>Meja Belajar</h3>
                <p class="normal-price">Rp 700.000</p>
                <p class="promo-price">Rp 600.000</p>
                <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
            </div>
        </div>
    </section>

    <section id="katalog" class="katalog-section">
        <h2>Katalog Produk</h2>
        <div class="category-links">
            <a href="#katalog" class="category-link" onclick="showCategory('ruang-tamu', this)">Ruang Tamu</a>
            <a href="#katalog" class="category-link" onclick="showCategory('kamar-mandi', this)">Kamar Mandi</a>
            <a href="#katalog" class="category-link" onclick="showCategory('kamar-tidur', this)">Kamar Tidur</a>
        </div>
        <div id="ruang-tamu" class="category">
            <h3>Produk Ruang Tamu</h3>
            <div class="product-category">
                @foreach ($barang as $item)
                <div class="product-card">
                    <img src="{{ asset('storage/gambar/barang/'.$item->gambar) }}" alt="Living Room Sofa" class="product-image">
                    <h3>{{$item->nama}}</h3>
                    {{-- format harga dari xxxxxxx to x.xxx.xxx --}}
                    <?php
                        $harga = (string)$item->harga;
                        $harga = strrev($harga);
                        $arr = str_split($harga, "3");

                        $ganti_format_harga = implode(".", $arr);
                        $ganti_format_harga = strrev($ganti_format_harga);
                    ?>
                    <p class="price">Rp {{$ganti_format_harga}}</p>
                    <span>{{$item->kategori->nama}}</span> <br>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                    <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
               
                @endforeach
                {{-- <div class="product-card">
                    <img src="{{ asset('assets/img/produk/sofa ruang tamu.png') }}" alt="Living Room Sofa" class="product-image">
                    <h3>Sofa Ruang Tamu</h3>
                    <p class="price">Rp 1.200.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/meja kopi.png') }}" alt="Coffee Table" class="product-image">
                    <h3>Meja Kopi</h3>
                    <p class="price">Rp 600.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/dudukan tv.png') }}" alt="TV Stand" class="product-image">
                    <h3>Dudukan TV</h3>
                    <p class="price">Rp 800.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div> --}}
            </div>
        </div>
        <div id="kamar-mandi" class="category" style="display: none;">
            <h3>Produk Kamar Mandi</h3>
            <div class="product-category">
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Lemari Kamar Mandi.png') }}" alt="Bathroom Cabinet" class="product-image">
                    <h3>Lemari Kamar Mandi</h3>
                    <p class="price">Rp 300.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Tirai Mandi.png') }}" alt="Shower Curtain" class="product-image">
                    <h3>Tirai Mandi</h3>
                    <p class="price">Rp 150.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Handuk.png') }}" alt="Towel Set" class="product-image">
                    <h3>Handuk</h3>
                    <p class="price">Rp 100.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
            </div>
        </div>
        <div id="kamar-tidur" class="category" style="display: none;">
            <h3>Produk Kamar Tidur</h3>
            <div class="product-category">
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Kasur Tidur.png') }}" alt="Bedroom Bed" class="product-image">
                    <h3>Kasur Tidur</h3>
                    <p class="price">Rp 2.000.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Lemari Pakaian.png') }}" alt="Wardrobe" class="product-image">
                    <h3>Lemari Pakaian</h3>
                    <p class="price">Rp 1.500.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
                <div class="product-card">
                    <img src="{{ asset('assets/img/produk/Meja Tempat Tidur.png') }}" alt="Nightstand" class="product-image">
                    <h3>Meja Tempat Tidur</h3>
                    <p class="price">Rp 500.000</p>
                    <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                <button class="buy-btn"><i class="bi bi-bag"></i></button>
                </div>
            </div>
        </div>
        <div class="more-products">
                <a href="/list-produk" class="more-products-btn">Lihat Produk Selengkapnya</a>
            </div>
    </section>

@endsection
@section('about-us', true)
@section('kontak', true)
@section('footer', true)