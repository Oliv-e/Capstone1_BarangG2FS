@extends('layouts.page.master')

@section('title', 'Detail Produk')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/page/detail-produk.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/master.css') }}">
@endsection

@section('content')
    <div class="container-fluid p-5 bg-coklat">
        <div class="container">
            <h1 class="fw-bold px-4 fs-2"><i class="bi bi-info-circle-fill text-coklat-gelap"></i> DETAIL PRODUK</h1>
        </div>
    </div>
    <div class="container p-4" style="min-height: 83.3vh;">
        <a onclick="history.back()" class="btn btn-coklat-gelap">Kembali</a>
        <div class="card mt-4 border-none border-5 border-start rounded-none border-coklat-gelap">
            <div class="row g-0">
                <div class="col-md-4 product-image">
                    <img src="{{ asset('storage/gambar/barang/' . $produk->gambar) }}" class="img-fluid rounded-start" alt="Gambar Produk">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold fs-2">{{ $produk->nama }}</h2>
                        <p class="kategori"><span class="bold">Kategori:</span></br>{{ $produk->kategori->nama }}</p>
                        <p class="card-text my-2"><span class="bold">Deskripsi:</span></br> {!! $produk->deskripsi !!}</p>
                        <p class="card-text my-2 text-coklat-gelap"><strong>Harga: Rp. {{ number_format($produk->harga, 0, ',', '.') }}</strong></p>
                        <div class="rating my-2">
                            <strong class="me-2">Rating:</strong>
                            
                            <span>({{ number_format($produk->rating, 1) }}/5 dari {{ $ulasan->count() }} ulasan)</span>
                        </div>
                        <a onclick="confirmCart(this)" data-url="{{ route('add.to.cart', ['id' => $produk->id]) }}" class="btn btn-coklat-gelap my-3" role="button"><i class="bi bi-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="fw-bold fs-3 mt-4"><i class="bi bi-star-fill text-coklat-gelap"></i> ULASAN PRODUK</h3>
        <h4 class="fw-bold fs-4 mt-4">Tambahkan Komentar Anda</h4>
        @auth
    @if ($produk->userHasPurchased())
        <div class="row mt-3">
            <div class="col-12">
                <form action="{{ route('ulasan.store', ['barang_id' => $produk->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <div class="rating" id="rating">
                            <i class="bi bi-star" data-value="1"></i>
                            <i class="bi bi-star" data-value="2"></i>
                            <i class="bi bi-star" data-value="3"></i>
                            <i class="bi bi-star" data-value="4"></i>
                            <i class="bi bi-star" data-value="5"></i>
                        </div>
                        <input type="hidden" name="rating" id="rating-value" required>
                    </div>

                    <div class="mb-3">
                        <label for="komentar" class="form-label">Komentar</label>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-coklat-gelap">Kirim Komentar</button>
                </form>
            </div>
        </div>
    @else
        <p>Anda hanya dapat menambahkan komentar setelah melakukan transaksi.</p>
    @endif
@else
    <p>Anda harus <a href="{{ route('login') }}">login</a> untuk menambahkan komentar.</p>
@endauth
        <div class="row gap-y-4 mt-4">
            @isset($ulasan)
                @foreach($ulasan as $review)
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="review-title">{{ $review->user ? $review->user->nama : 'User tidak diketahui' }}</h5>
                                        <p class="review-date"><small class="text-muted">Tanggal Ulasan: {{ $review->created_at->format('d M Y') }}</small></p>
                                    </div>
                                    <div class="stars text-warning">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="bi {{ $i <= $review->rate ? 'bi-star-fill' : 'bi-star' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                                <p class="review-text">{{ $review->komentar }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <h1>Komentar tidak ditemukan</h1>
                </div>
            @endisset
        </div>
        
    </div>
    
@endsection

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
        document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.rating i');
        const ratingValue = document.getElementById('rating-value');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                ratingValue.value = this.getAttribute('data-value');
                updateStars(this.getAttribute('data-value'));
            });

            star.addEventListener('mouseover', function() {
                updateStars(this.getAttribute('data-value'), 'hovered');
            });

            star.addEventListener('mouseout', function() {
                updateStars(ratingValue.value);
            });
        });

        function updateStars(value, state = 'selected') {
            stars.forEach(star => {
                star.classList.remove('selected', 'hovered');
                if (star.getAttribute('data-value') <= value) {
                    star.classList.add(state);
                }
            });
        }
    });
    </script>
@endsection