@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p> >> CAPSTONE#1_FS2 / Dashboard / Orders</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman transaksi untuk admin</h2>

        @if (session('success'))
            <div class="alert alert-success text-white">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger text-white">
                {{ session('error') }}
            </div>
        @endif

        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pembeli</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor HP</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengiriman</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Masuk</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3 text-xs">{{ $order->nama_pembeli }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-start">
                                    <div class="d-flex align-items-center"
                                        style="word-break: break-word; white-space: normal;">
                                        <span class="mx-3 text-xs">{{ $order->alamat }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3 text-xs">{{ $order->nomor_hp }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3 text-xs">{{ $order->pengiriman }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3 text-xs">{{ $order->created_at->format('d-m-Y') }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="mx-3 text-xs">{{ $order->status }}</span>
                                    </div>
                                </td>
                                <td class="d-flex content-center">
                                    <a href="{{ route('transaksi.detail', $order->id) }}" class="btn bg-gradient-info">Detail Order</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
@endsection
