@extends('layouts.page.master')

@section('title', 'Welcome to Furniture Max')

@section('css-style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/page/welcome.css') }}">
@endsection

@section('content')
    <section id="home" class="hero-section">
        <div class="hero-text">
            <h1 class="font-title">Furniture Max</h1>
            <p>Deskripsi singkat tentang website Furniture Max yang menawarkan berbagai macam furniture berkualitas tinggi
                dengan harga terjangkau.</p>
            <a class="btn btn-coklat-gelap shop-now-btn" onclick="window.location.href='/list-produk'">Belanja Sekarang</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assets/img/produk/sofa header.png') }}" alt="Produk">
        </div>
    </section>

    <section id="promo" class="promo-section">
        <h2 class="font-romman">Promo</h2>
        <div class="promo-products">
            @forelse ($promoItems as $promoItem)
                @foreach ($promoItem->promoBarang as $items)
                    <div class="product-card">
                        <img src="{{ asset('storage/gambar/barang/' . $items->gambar) }}" alt="Living Room Sofa"
                            class="product-image">
                        <h3>{{ $items->nama }}</h3>
                        <p class="normal-price">Rp {{ number_format($items->harga, 0, ',', '.') }}</p>
                        @if ($harga_promo = $items->harga - $promoItem->pengurangan_harga)
                            <p class="promo-price">Rp {{ number_format($harga_promo, 0, ',', '.') }}</p>
                        @endif
                        <button class="add-to-cart-btn"><i class="bi bi-cart"></i></button>
                        <button class="buy-btn"><i class="bi bi-bag"></i></button>
                    </div>
                @endforeach
            @empty
                <p>Tidak ada barang promo saat ini.</p>
            @endforelse
        </div>

        <div class="more-products">
            <a href="/promo" class="more-products-btn">Lihat Promo Selengkapnya</a>
        </div>
    </section>


    <section id="katalog" class="katalog-section">
        <h2 class="font-romman pb-8">Katalog Produk</h2>
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
                        <img src="{{ asset('storage/gambar/barang/' . $item->gambar) }}" alt="Living Room Sofa"
                            class="product-image">
                        <h3>{{ $item->nama }}</h3>
                        {{-- format harga dari xxxxxxx to x.xxx.xxx --}}
                        <?php
                        $harga = (string) $item->harga;
                        $harga = strrev($harga);
                        $arr = str_split($harga, '3');
                        
                        $ganti_format_harga = implode('.', $arr);
                        $ganti_format_harga = strrev($ganti_format_harga);
                        ?>
                        <p class="price">Rp {{ $ganti_format_harga }}</p>
                        <span>{{ $item->kategori->nama }}</span> <br>
                        <a onclick="confirmCart(this)" data-url="{{ route('add.to.cart', ['id' => $item->id]) }}" class="btn btn-success" role="button"><i class="bi bi-cart"></i> Add to Cart</a>
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
                    <img src="{{ asset('assets/img/produk/Lemari_Kamar_Mandi.png') }}" alt="Bathroom Cabinet"
                        class="product-image">
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
                    <img src="{{ asset('assets/img/produk/Meja Tempat Tidur.png') }}" alt="Nightstand"
                        class="product-image">
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
@section('js-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    confirmCart = function(button) {
            var url = $(button).data('url');
            swal({
                'title': 'Tambah Barang',
                'text': 'Apakah Kamu Yakin Ingin Menambah Barang Ini?',
                'buttons': true
            }).then(function(value) {
                if (value) {
                    window.location = url;
                }
            })
        }
</script>
@endsection
