@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p>Hai, CAPSTONE#1_FS2 / Dashboard</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman barang untuk admin</h2>
    </div>
    @include('admin.components.footer')
</main>
@endsection