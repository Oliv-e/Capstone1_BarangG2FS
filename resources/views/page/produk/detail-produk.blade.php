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
                    <img src="{{ asset('assets/img/produk/' . $produk->gambar) }}" class="img-fluid rounded-start" alt="Gambar Produk">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold fs-2">{{ $produk->nama }}</h2>
                        <p class="kategori"><span class="bold">Kategori:</span></br>{{ $produk->kategori->nama }}</p>
                        <p class="card-text my-2"><span class="bold">Deskripsi:</span></br> {!! $produk->deskripsi !!}</p>
                        <p class="card-text my-2 price"><strong>Harga: Rp. {{ number_format($produk->harga, 0, ',', '.') }}</strong></p>
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
        <h4 class="fw-bold fs-4 mt-4">Tambahkan Komentar Anda</h4>
        @auth
        <div class="row mt-3">
            <div class="col-12">
                <form action="{{ route('ulasan.store', ['barang_id' => $produk->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-control" id="rating" name="rating" required>
                            <option value="1">1 - Sangat Buruk</option>
                            <option value="2">2 - Buruk</option>
                            <option value="3">3 - Biasa</option>
                            <option value="4">4 - Baik</option>
                            <option value="5">5 - Sangat Baik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="komentar" class="form-label">Komentar</label>
                        <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                </form>
            </div>
        </div>
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
                                        <h5 class="review-title">{{ $review->user->name }}</h5>
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
