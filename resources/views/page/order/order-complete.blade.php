@extends('layouts.page.master')

@section('title', 'Pembelian Berhasil')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
    <div class="flex justify-center items-center" style="min-height: 81.5vh; margin-top: 13px;">
        <div class="flex flex-col gap-2 items-center">
            <i class="bi bi-check-circle text-sage" style="font-size: 75px"></i>
            <h2 class="fs-2 fw-bold text-sage">PEMBELIAN BERHASIL</h2>
            <p class="mt-2 mb-4 text-center" style="max-width: 500px">Terima kasih telah membeli! orderan kamu akan di proses dalam waktu 4-6 jam. Kamu juga akan menerima notifikasi melalui email saat orderan kamu selesai.</p>
            <a href="{{ route('order-status') }}" class="btn bg-blue text-white">Cek Status</a>
            <a href="{{ route('list-produk') }}" class="btn bg-sage text-white">Lanjut Belanja</a>
        </div>
    </div>
@endsection

@section('footer', true)