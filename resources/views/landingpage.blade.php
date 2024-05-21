<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Max</title>
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="navbar">
    <div class="navbar-left">
        <img src="{{ asset('assets/img/logoFM.png') }}" alt="Logo" class="logo-image">
        <div class="logo-text">Furniture Max</div>
    </div>
    <div class="navbar-toggler">
        <div class="navbar-toggler-icon"></div>
    </div>
    <ul class="nav-links">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#promo">Promo</a></li>
        <li><a href="#katalog">Katalog Produk</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>
    <div class="navbar-right">
        <a href="#keranjang" class="cart-icon"><i class="bi bi-cart"></i></a>
        <button class="login-btn"><i class="bi bi-person"></i> Login</button>
    </div>
</nav>

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
            <div class="product-card">
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
            </div>
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
</section>

<section id="tentang" class="tentang-section">
    <h2>Tentang Kami</h2>
    <div class="tentang-content">
        <img src="{{ asset('assets/img/produk/Tentang Kami.png') }}" alt="Tentang Kami">
        <div class="tentang-description">
            <h3>Furniture Max App</h3>
            <p>Furniture Max adalah perusahaan yang bergerak di bidang penjualan furniture dengan kualitas tinggi dan harga terjangkau. Kami menawarkan berbagai macam produk untuk memenuhi kebutuhan furniture Anda.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i> Kualitas terbaik</li>
                <li><i class="bi bi-check-circle"></i> Harga terjangkau</li>
                <li><i class="bi bi-check-circle"></i> Desain modern</li>
                <li><i class="bi bi-check-circle"></i> Layanan pelanggan terbaik</li>
            </ul>
            <button class="lihat-produk-btn" onclick="window.location.href='#katalog'">Lihat Produk</button>
        </div>
    </div>
</section>

<section id="kontak" class="kontak-section">
    <h2>Kontak</h2>
    <div class="maps-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.825307933956!2d112.70563441567572!3d-7.289145797506825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6fb9dba22f%3A0x90bfa233f50d18d8!2sJl.%20Raya%20Menganti%20Karangan%20No.578%2C%20Babatan%2C%20Kec.%20Wiyung%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060227!5e0!3m2!1sid!2sid!4v1620205062259!5m2!1sid!2sid"
                width="100"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    <div class="kontak-content">
        <div class="kontak-item">
            <h3><i class="bi bi-geo-alt"></i> Alamat</h3>
            <p>Jl. Raya Menganti Karangan No.578,<br> Babatan, Kec. Wiyung, Surabaya,<br> Jawa Timur 60227</p>
        </div>
        <div class="kontak-item">
            <h3><i class="bi bi-telephone"></i> Kontak</h3>
            <p><i class="bi bi-phone"></i> 08123456789</p>
            <p><i class="bi bi-envelope"></i> furnituremax@gmail.com</p>
        </div>
        <div class="kontak-item">
            <h3><i class="bi bi-share"></i> Sosial Media</h3>
            <p><i class="bi bi-instagram instagram-icon"></i> FurnitureMax</p>
            <p><i class="bi bi-facebook facebook-icon"></i> FurnitureMax</p>
            <p><i class="bi bi-tiktok tiktok-icon"></i> FurnitureMax</p>
        </div>
    </div>
</section>



<footer>
    <p>© Copyright FurnitureMax. All Rights Reserved</p>
</footer>


</body>
</html>
