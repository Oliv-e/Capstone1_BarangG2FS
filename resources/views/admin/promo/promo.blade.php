@extends('admin.layouts.master')

@section('body')
    <main class="main-content border-radius-lg ">
        <!-- Navbar -->
        @include('admin.components.navbar')
        <div class="p-4 mx-4" style="min-height: 80vh">
            <p>Hai,
                @if (Auth::check())
                    {{ Auth::user()->nama }}
                @endif
                / Promo
            </p>

            <!-- Tombol Tambah Kategori -->
            <button type="button" class="btn btn-primary w-full mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add
                Promo</button>

            <!-- Tabel Kategori -->
            <table id="kategoriTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Pengurangan Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promos as $promo)
                        <tr>
                            <td>{{ $promo->id }}</td>
                            <td>{{ $promo->nama }}</td>
                            <td>{{ $promo->deskripsi }}</td>
                            <td>{{ $promo->pengurangan_harga }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#updateModal" data-id="{{ $promo->id }}"
                                    data-nama="{{ $promo->nama }}">Update</button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-id="{{ $promo->id }}"
                                    data-nama="{{ $promo->nama }}">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal Tambah -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addForm" action="" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 input-group input-group-outline my-3">
                            <label for="nama" class="form-label">Nama Promo</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3 input-group input-group-outline my-3">
                            <label for="nama" class="form-label">Pengurangan Harga</label>
                            <input type="number" class="form-control" required>
                        </div>

                        <div class="input-group input-group-static mb-4">
                            <label for="exampleFormControlSelect1" class="ms-0">Promo Untuk Barang</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Meja</option>
                                <option>Kursi</option>
                                <option>Lemari</option>
                                <option>Kasur</option>
                                <option>Sofa</option>
                            </select>
                        </div>

                        <div class="mb-3 input-group input-group-dynamic my-3">
                            <textarea class="form-control" rows="3" placeholder="Deskripsikan Promo apa yang akan ditambahkan."
                                spellcheck="false"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateForm" action="" method="POST">
                    @csrf
                    @method('POST')
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Promo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 flex flex-col my-3">
                            <label for="nama" class="mb-1 text-gray-700">Nama Promo</label>
                            <input type="text" class="form-control border border-gray-300 rounded p-2" id="nama"
                                name="nama" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus Promo ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts untuk DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#kategoriTable').DataTable({
            "language": {
                "paginate": {
                    "previous": "<i class='fas fa-chevron-left'></i>",
                    "next": "<i class='fas fa-chevron-right'></i>"
                }
            }
        });

        $('.dataTables_filter input').addClass('border border-gray-300 rounded-md');

        $('#updateModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');

            var modal = $(this);
            modal.find('.modal-body #nama').val(nama);
            modal.find('#updateForm').attr('action', '/kategori/' + id);
        });

        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var nama = button.data('nama');

            var modal = $(this);
            modal.find('.modal-body p').html('Apakah Anda yakin ingin menghapus kategori <strong>' + nama +
                '</strong>?');
            modal.find('#deleteForm').attr('action', '/kategori/' + id);
        });
    </script>
@endsection
