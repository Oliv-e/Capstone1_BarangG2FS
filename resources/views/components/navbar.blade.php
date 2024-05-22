
<link rel="stylesheet" href="{{ asset('assets/css/components/navbar.css')}}">

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