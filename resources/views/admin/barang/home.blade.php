@extends('admin.layouts.master')

@section('body')
<main class="main-content border-radius-lg ">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <div class="p-4 mx-4" style="min-height: 80vh">
        <p> >> CAPSTONE#1_FS2 / Dashboard / Barang</p>
        {{-- Start Here --}}
        <h2>Ini adalah halaman barang untuk admin</h2>
        <a href="{{route('barang.create')}}" class="btn bg-gradient-info">tambah</a>
        @if (session('success'))
            <div class="alert alert-success text-white">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger text-white">
                {{ session('error') }}
            </div>
        @endif
        {{-- <a href="" class="btn bg-gradient-warning">Edit</a>
        <a href="" class="btn bg-gradient-danger">Hapus</a> --}}

        <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dibuat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Terakhir Diedit</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                    <tr>
                        <td>
                        <div class="d-flex px-2">
                            <div>
                            <img src="{{ asset('storage/gambar/barang/'. $item->gambar)}}" class="avatar avatar-sm rounded-circle me-2">
                            </div>
                            <div class="my-auto">
                            <h6 class="mb-0 text-xs">{{$item->nama}}</h6>
                            </div>
                        </div>
                        </td>
                        <td>
                        <p class="text-xs font-weight-normal mb-0">{{$item->harga}}</p>
                        </td>
                        <td class="align-middle">
                            {!!$item->deskripsi!!}
                        </td>
                        <td class="align-middle text-center">
                        <div class="d-flex align-items-center">
                            <span class="me-2 text-xs">{{$item->kategori->nama}}</span>
                        </div>
                        </td>
                        <td class="align-middle text-center">
                            <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">{{$item->created_at}}</span>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <div class="d-flex align-items-center">
                                <span class="me-2 text-xs">{{$item->updated_at}}</span>
                            </div>
                        </td>
                        <td class="d-flex gap-1 justify-content-center">
                            <form action="{{route('barang.edit',$item->id)}}">
                                <button class="btn bg-gradient-warning">Edit</button>
                            </form>
                            <a onclick="confirmDelete(this)" data-url="{{route('barang.destroy',['id' => $item->id])}}" class="btn bg-gradient-danger" role="button">Hapus</a>
                        </td>
                        {{-- <td>
                            <input type="checkbox" name="" id="">
                        </td> --}}
            
                        {{-- <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                            <span class="material-icons">
                            more_vert
                            </span>
                        </button>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    confirmDelete = function(button) {
    var url = $(button).data('url');
    swal({
        'title': 'Konfirmasi Hapus',
        'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
        'dangermode': true,
        'buttons': true
        }).then(function(value) {
        if (value) {
            window.location = url;
        }
        })
    }
</script>
@endsection