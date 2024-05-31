@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p>Hai, CAPSTONE#1_FS2 / Dashboard</p>
        {{-- Start Here --}}
        <h2>Selamat Sore</h2>
        <div class="d-flex flex-column flex-lg-row gap-2 justify-content-around">
            {{-- <div class="card card-frame border">
                <div class="p-4 d-flex flex-column justify-content-between">
                  <p class="fw-bold">Jumlah Barang : {{$c_barang}}</p>
                  <a href="{{route('barang.index')}}" class="btn bg-gradient-info">Lihat Barang</a>
                </div>
            </div> --}}
            <div class="d-flex flex-column border rounded px-2">
                <div class="d-flex gap-2">
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <h2>{{$c_barang}}</h2>
                        <p>Jumlah Barang</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn bg-gradient-info w-100">LIHAT</a>
                </div>
            </div>
            <div class="d-flex flex-column border rounded px-2">
                <div class="d-flex gap-2">
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <h2>X</h2>
                        <p>Jumlah Promo</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">percent</i>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn bg-gradient-info w-100">LIHAT</a>
                </div>
            </div>
            <div class="d-flex flex-column border rounded px-2">
                <div class="d-flex gap-2">
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <h2>X</h2>
                        <p>Jumlah ...</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn bg-gradient-info w-100">LIHAT</a>
                </div>
            </div>
            <div class="d-flex flex-column border rounded px-2">
                <div class="d-flex gap-2">
                    <div class="d-flex flex-column justify-content-between align-items-center">
                        <h2>{{$c_kategori}}</h2>
                        <p>Jumlah Kategori</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                </div>
                <div>
                    <a href="#" class="btn bg-gradient-info w-100">LIHAT</a>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-around gap-2 gap-lg-0 my-4">
            <div class="col-12 col-lg-5 card card-frame p-4 border">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Barang Terjual Minggu Ini</h5>
                    <h4>18</h4>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Pendapatan Minggu Ini</h5>
                    <h4>Rp. 9.000.000</h4>
                </div>
            </div>
            <div class="col-12 col-lg-5 card card-frame p-4 border">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Total Barang Terjual</h5>
                    <h4>93</h4>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Total Pendapatan</h5>
                    <h4>Rp. 9.000.000</h4>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
@endsection