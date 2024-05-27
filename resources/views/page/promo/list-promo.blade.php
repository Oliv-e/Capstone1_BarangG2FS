@extends('layouts.page.master')

@section('title', 'Welcome to Furniture Max')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container bg-danger p-4" style="margin-top: 13px">
        <h1 class="fw-bold fs-2">LIST PROMO</h1>
        <div class="row">
            <div class="col">
                <h2>Nama Voucher</h2>
            </div>
            <div class="col">
                <h2>Nama Voucher</h2>
            </div>
        </div>
    </div>
@endsection

@section('footer', true)