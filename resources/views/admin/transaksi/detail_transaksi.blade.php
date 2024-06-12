@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p> >> CAPSTONE#1_FS2 / Dashboard / Detail Transaksi</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman detail transaksi untuk admin</h2>
        <a href="{{ route('transaksi.index') }}" class="btn bg-gradient-info">Kembali</a>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Detail Pembelian</h4>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nama Pembeli:</strong>
                        <p>{{ $transaksi->nama_pembeli }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Alamat:</strong>
                        <p>{{ $transaksi->alamat }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Nomor HP:</strong>
                        <p>{{ $transaksi->nomor_hp }}</p>
                    </div>
                </div>

                @foreach($transaksi->detailTransaksi as $detail)
                <div class="row mb-3">
                    <div class="col-md-3 d-flex align-items-center">
                        <img src="{{ asset('storage/gambar/barang/'.$detail->barang->gambar) }}" class="img-fluid product-image" alt="Gambar Produk">
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Nama Produk :</strong>
                            <p class="fs-5">{{ $detail->barang->nama }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Harga Produk :</strong>
                            <p class="fs-5">Rp. {{ number_format($detail->barang->harga, 2) }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Jumlah Produk :</strong>
                            <p class="fs-5">{{ $detail->jumlah }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Status : </strong>
                            <p class="fs-5">{{ $detail->status }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div>
                            <strong>Status : </strong>
                            <p class="fs-5">Rp. {{ number_format($transaksi->total_harga, 2) }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-end">
                        <form action="{{ route('transaksi.proses', $transaksi->id) }}" method="POST">
                            @csrf
                            @method('PUT') 
                            <button type="submit" onclick="sendWhatsappMessages({{$transaksi->nomor_hp}})" class="btn bg-gradient-info">Kirim Pesan & Proses</button>
                        </form>
                        <button class="btn btn-success ms-2" onclick="window.location.href='/dashboard/transaksi';">Kirim</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
<script>
    function sendWhatsappMessages(nomor) {
        const kode = '+62';
        nomor = kode + nomor
        const pesan = 'Pesanan Anda Sedang Di Proses';
        const encoded = encodeURIComponent(pesan);
        window.open('https://api.whatsapp.com/send?phone='+nomor+'&text='+encoded);
    }
</script>
@endsection
