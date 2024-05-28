@extends('layouts.page.master')

@section('title', 'List Promo di Furniture Max')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
<div class="container-fluid p-5" style="margin-top: 13px; background-color: #e6c7ab">
    <div class="container">
        <h1 class="fw-bold px-4 fs-2"><i class="bi bi-megaphone-fill" style="color: #7C8046;"></i> LIST PROMO</h1>
    </div>
</div>
    <div class="container p-4" style="min-height:83.3vh">
        <a href="/" class="btn btn-primary">Kembali</a>
        <div class="row gap-y-4 mt-4">
            @foreach($promo as $item)
            <div class="col-sm-12 col-md-6">
                <div class="card border-none border-5 border-start border-bottom rounded-none" style="border-color: #7C8046!important">
                    <div class="card-body">
                      <h3 class="card-title fw-bold fs-3">{{$item->nama}}</h3>
                      <p class="card-text my-2">{{$item->deskripsi}}</p>
                      <p class="card-text my-2">Potongan (Rp) : {{$item->pengurangan_harga}}</p>
                      <a href="{{ route('detail-promo',$item->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer', true)