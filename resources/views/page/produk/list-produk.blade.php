@extends('layouts.page.master')

@section('title', 'List Produk')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/page/list-produk.css') }}">
    @endsection


@section('content')
    <div class="container-fluid p-5" style="margin-top: 13px; background-color: #e6c7ab;">
        <div class="container">
            <h1 class="fw-bold px-4 fs-2"><i class="bi bi-box2-fill" style="color: #7C8046;"></i> LIST PRODUK</h1>
        </div>
    </div>
    <div class="container p-4" style="min-height: 83.3vh;">
        <!-- Filter by Category -->
        <div class="category-select mb-4">
            <form id="filterForm">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <strong>Pilih Kategori Produk</strong> <!-- Tambahkan tulisan bold -->
                        <select class="form-select" id="category" name="category" onchange="filterProducts()">
                            <option value="1">Ruang Tamu</option>
                            <option value="2">Kamar Mandi</option>
                            <option value="3">Kamar Tidur</option>
                        </select>
                    </div>
                    <div class="col-md-6 search-container">
                        <strong>Pencarian Produk</strong> <!-- Tambahkan tulisan bold -->
                        <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan Nama Produk..." oninput="searchProducts()">
                        <i class="bi bi-search search-icon"></i> <!-- Masukkan ikon di sini -->
                    </div>
                </div>
            </form>
        </div>

        <!-- Product List -->
        <div class="row" id="productList">
            <!-- Product items will be inserted here by JavaScript -->
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-secondary me-2" id="prevPage" onclick="prevPage()">Produk Sebelumnya</button>
            <button class="btn btn-outline-secondary" id="nextPage" onclick="nextPage()">Produk Selanjutnya</button>
        </div>
    </div>

    <script>
        const products = {
            1: [
                {id: 1, gambar: 'sofa ruang tamu.png', nama: 'Sofa Ruang Tamu', deskripsi: 'Sofa ruang tamu adalah salah satu perabotan utama yang ditempatkan di ruang tamu rumah.', harga: 500000, kategori: 'Ruang Tamu'},
                {id: 2, gambar: 'meja kopi.png', nama: 'Meja Kopi', deskripsi: 'Meja kopi adalah perabot kecil yang biasanya ditempatkan di ruang tamu, sering kali di depan sofa atau kursi.', harga: 600000, kategori: 'Ruang Tamu'},
                {id: 3, gambar: 'dudukan tv.png', nama: 'Dudukan TV', deskripsi: 'Dudukan TV, sering disebut sebagai rak TV atau meja TV, adalah perabotan yang dirancang untuk menempatkan televisi.', harga: 500000, kategori: 'Ruang Tamu'},
                // Tambahkan produk sampel lainnya untuk Ruang Tamu
            ],
            2: [
                {id: 11, gambar: 'lemari kamar mandi.png', nama: 'Lemari Kamar Mandi', deskripsi: 'Deskripsi produk 1', harga: 1500000, kategori: 'Kamar Mandi'},
                {id: 12, gambar: 'tirai mandi.png', nama: 'Tirai Mandi', deskripsi: 'Deskripsi produk 2', harga: 1600000, kategori: 'Kamar Mandi'},
                {id: 13, gambar: 'Handuk.png', nama: 'Handuk', deskripsi: 'Deskripsi produk 3', harga: 1600000, kategori: 'Kamar Mandi'},
                // Tambahkan produk sampel lainnya untuk Kamar Mandi
            ],
            3: [
                {id: 21, gambar: 'kasur tidur.png', nama: 'Kasur Tidur', deskripsi: 'Deskripsi produk 1', harga: 2000000, kategori: 'Kamar Tidur'},
                {id: 22, gambar: 'lemari pakaian.png', nama: 'Lemari Pakaian', deskripsi: 'Deskripsi produk 2', harga: 2200000, kategori: 'Kamar Tidur'},
                {id: 23, gambar: 'Meja Tempat Tidur.png', nama: 'Meja Tempat Tidur', deskripsi: 'Deskripsi produk 3', harga: 2200000, kategori: 'Kamar Tidur'},
                // Tambahkan produk sampel lainnya untuk Kamar Tidur
            ],
        };

        let currentPage = 1;
        const itemsPerPage = 9;
        let filteredProducts = [];

        function filterProducts() {
            const category = document.getElementById('category').value;
            filteredProducts = products[category];
            currentPage = 1;
            displayProducts();
        }

        function searchProducts() {
            const search = document.getElementById('search').value.toLowerCase();
            const category = document.getElementById('category').value;
            filteredProducts = products[category].filter(product => product.nama.toLowerCase().includes(search));
            currentPage = 1;
            displayProducts();
        }

        function displayProducts() {
            const productList = document.getElementById('productList');
            productList.innerHTML = '';
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedProducts = filteredProducts.slice(start, end);

            paginatedProducts.forEach(product => {
                const productCard = `
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/produk/') }}/${product.gambar}" class="img-fluid rounded-start" alt="${product.nama}">
                                <i class="bi bi-cart-fill cart-icon" onclick="addToCart(${product.id})"></i>                           
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">${product.nama}</h5>
                                <p class="kategori"><span class="fw-bold">Kategori:</span> ${product.kategori}</p>
                                <p class="card-text my-2">${product.deskripsi}</p>
                                <p class="card-text my-2 price"><strong>Harga: Rp. ${product.harga.toLocaleString('id-ID')}</strong></p>
                                
                        <div class="rating my-2">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span>(4.5/5 dari 2 ulasan)</span>
                        </div>
                                <a href="/detail-produk" class="btn btn-primary">Detail Produk</a>
                                <button class="btn btn-buy">
                                        <i class="bi bi-bag"></i>
                            </div>
                        </div>
                    </div>
                `;
                productList.innerHTML += productCard;
            });

            document.getElementById('prevPage').disabled = currentPage === 1;
            document.getElementById('nextPage').disabled = end >= filteredProducts.length;
        }

        function prevPage() {
            if (currentPage > 1) {
                currentPage--;
                displayProducts();
            }
        }

        function nextPage() {
            if (currentPage * itemsPerPage < filteredProducts.length) {
                currentPage++;
                displayProducts();
            }
        }

        function addToCart(productId) {
            alert(`Produk dengan ID ${productId} telah ditambahkan ke keranjang.`);
            // Di sini Anda bisa menambahkan logika untuk menambahkan produk ke keranjang
        }

        // Initial display
        filterProducts();
    </script>
@endsection

@section('footer', true)
