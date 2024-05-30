@extends('layouts.page.master')

@section('title', 'Keranjang Saya')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
<div class="container-fluid flex justify-center bg-sage p-4 text-white">
    <h1 class="fs-1 fw-bold"><i class="bi bi-cart"></i> Keranjang Belanja Saya</h1>
</div>
<div class="container" style="min-height: 65.5vh">
    <div class="row">
        <div class="col-12 col-lg-6 p-4">
            <div class="flex justify-between py-4">
                <div class="text-center w-full fw-bold fs-4">
                    Produk
                </div>
                <div class="text-center w-full fw-bold fs-4">
                    Harga
                </div>
                <div class="text-center w-full fw-bold fs-4">
                    Jumlah
                </div>
                <div class="text-center w-full fw-bold fs-4">
                    Total
                </div>
            </div>
            {{-- start loop --}}
            <div class="flex items-center py-4 justify-between">
                <div class="w-full">
                    <img src="{{asset('assets/img/produk/kursi.png')}}" width="100px" class="img-fluid mx-auto" alt="">
                </div>
                <div class="text-center w-full">
                    Rp. 100.000
                </div>
                <div class="text-center w-full">
                    2
                </div>
                <div class="text-center w-full">
                    Rp. 200.000
                </div>
            </div>
            <hr class="border-2">
            {{-- end loop --}}
            <div class="flex justify-between w-100 py-4">
                <a href="" class="btn btn-success">Update Cart</a>
                <a href="" class="btn btn-success">Clear Cart</a>
            </div> 
        </div>
        <div class="col-12 col-lg-6 p-4">
            <div class="bg-slate-100 p-4 my-4">
                <div class="my-4 text-center">
                    <label class="fs-3 fw-bolder">Cart Totals</label>
                </div>
                <div class="my-4">
                    <div class="flex justify-between my-4">
                        <h2>Subtotal : </h2>
                        <h2>Rp. 200.000</h2>
                    </div>
                    <hr>
                </div>
                <div class="my-4">
                    <div class="flex justify-between my-4">
                        <h2>Total : </h2>
                        <h2>Rp. 222.000</h2>
                    </div>
                    <hr>
                </div>
                <div class="my-4">
                    <p class="text-sage">* Sudah termasuk pajak</p>
                </div>
                <div class="my-4 w-full">
                    <a href="" class="btn bg-sage text-white w-full">Button</a>
                </div>  
            </div>
            <div class="bg-slate-100 p-4 my-4">
                <div class="my-4 text-center">
                    <label class="fs-3 fw-bolder">Hitung Pengiriman</label>
                </div>
                <div class="my-4">
                    <div class="flex justify-between my-4">
                        <input type="text" class="form-control border rounded" placeholder="Surabaya">
                    </div>
                    <hr>
                </div>
                <div class="my-4">
                    <div class="flex justify-between my-4">
                        <input type="text" class="form-control border rounded" placeholder="Surabaya">
                    </div>
                    <hr>
                </div>
                <div class="my-4">
                    <div class="flex justify-between my-4">
                        <input type="text" class="form-control border rounded" placeholder="Surabaya">
                    </div>
                    <hr>
                </div>
                <div class="my-4 w-full">
                    <a href="" class="btn bg-sage text-white w-full">Hitung</a>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer', true)