@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p>Hai, CAPSTONE#1_FS2 / Dashboard</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman dashboard untuk admin</h2>
        <div class="d-flex gap-2">
            <div class="card card-frame">
                <div class="card-body d-flex flex-column">
                  Jumlah Barang : {{$c_barang}}
                  <a href="{{route('barang.index')}}" class="btn bg-gradient-info mt-3">Lihat Barang</a>
                </div>
            </div>
            <div class="card card-frame">
                <div class="card-body d-flex flex-column">
                  Jumlah Kategori : {{$c_kategori}}
                  <a href="{{route('kategori.index')}}" class="btn bg-gradient-info mt-3">Lihat Kategori</a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
@endsection