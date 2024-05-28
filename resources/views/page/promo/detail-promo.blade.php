@extends('layouts.page.master')

@section('title', 'Detail Promo di Furniture Max')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container-fluid p-5" style="background-color: #e6c7ab">
        <div class="container">
            <h1 class="fw-bold px-4 fs-2"><i class="bi bi-megaphone-fill text-sage"></i> DETAIL PROMO</h1>
        </div>
    </div>
    <div class="container p-4" style="min-height:83.3vh">
        <a href="/promo" class="btn btn-primary">Kembali</a>
        <div class="card mt-4 border-none border-5 border-start rounded-none" style="border-color: #93D459!important">
            <div class="card-body">
                <h3 class="card-title fw-bold fs-3">{{$promo->nama}}</h3>
                <p class="card-text my-2">{{$promo->deskripsi}}</p>
                <p class="card-text my-2">Potongan (Rp) : {{$promo->pengurangan_harga}}</p>
            </div>
        </div>
        <h1 class="fw-bold fs-2 mt-4"><i class="bi bi-box2-fill text-sage"></i> BARANG YANG TERSEDIA</h1>
        <div class="row gap-y-4 mt-4">
            <div class="col-sm-12 col-md-6">
                <div class="card text-sm-center text-md-start border-none border-bottom border-5 rounded-none mb-3" style="border-color: #93D459!important">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://i.pinimg.com/originals/21/d8/dc/21d8dca3012288eb0d02a672a72fcce9.png" class="mx-auto img-fluid rounded-start" width="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title fs-2 fw-bold">{{$promo->barang->nama}}</h2>
                                <p class="card-text">{!!$promo->barang->deskripsi!!}</p>
                                <p class="card-text"><small class="text-body-secondary">Rp. {{$promo->barang->harga}}</small></p>
                                <div>
                                    <a href="#" class="btn btn-primary mt-1"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-warning mt-1"><i class="bi bi-cart"></i></a>
                                    <a href="#" class="btn btn-success mt-1"><i class="bi bi-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-12 col-md-6">
                <div class="card text-sm-center text-md-start border-none border-bottom border-5 rounded-none mb-3" style="border-color: #7C8046!important">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://i.pinimg.com/originals/21/d8/dc/21d8dca3012288eb0d02a672a72fcce9.png" class="mx-auto img-fluid rounded-start" width="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title fs-2 fw-bold">Card title</h2>
                                <p class="card-text">Deskripsi Barang yang dapat promo.</p>
                                <p class="card-text"><small class="text-body-secondary">Rp. xx.xxx.xxx</small></p>
                                <div>
                                    <a href="#" class="btn btn-primary mt-1"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-warning mt-1"><i class="bi bi-cart"></i></a>
                                    <a href="#" class="btn btn-success mt-1"><i class="bi bi-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('footer', true)