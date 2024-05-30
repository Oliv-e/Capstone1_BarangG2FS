@extends('layouts.page.master')

@section('title', 'Frequently Asked Questions')

@section('css-style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
<div class="container-fluid flex justify-center bg-sage p-4 text-white">
    <h1 class="fs-1 fw-bold"><i class="bi bi-question-square-fill"></i> Frequently Asked Questions <i class="bi bi-chat-square-text-fill"></i></h1>
</div>
<div class="container-fluid" style="min-height: 65.5vh">
    <div class="row">
        <div class="col-12 col-lg-6 p-4">
            <h3 class="py-4 fs-3 fw-bolder">General Information</h3>
            <div class="flex flex-col my-4 gap-y-2">
                <h5 class="fs-5 fw-bold">Jika barang sesuai, apakah bisa melakukan retur dan refund?</h5>
                <p style="text-align: justify" class="text-muted">Tentu bisa, karena kami selalu mengutamakan pembeli sesuai dengan visi misi kami, namun biaya operasional ditanggung pembeli.</p>
            </div>
            <div class="flex flex-col my-4 gap-y-2">
                <h5 class="fs-5 fw-bold">Lorem Ipsum Dolor Sit Amet?</h5>
                <p style="text-align: justify" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem tempore consectetur laboriosam suscipit sunt odit soluta expedita nemo aspernatur, alias, unde perspiciatis cum architecto beatae, nihil quis delectus eum consequuntur?.</p>
            </div>
            <div class="flex flex-col my-4 gap-y-2">
                <h5 class="fs-5 fw-bold">Lorem Ipsum Dolor Sit Amet?</h5>
                <p style="text-align: justify" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem tempore consectetur laboriosam suscipit sunt odit soluta expedita nemo aspernatur, alias, unde perspiciatis cum architecto beatae, nihil quis delectus eum consequuntur?.</p>
            </div>
            <div class="flex flex-col my-4 gap-y-2">
                <h5 class="fs-5 fw-bold">Lorem Ipsum Dolor Sit Amet?</h5>
                <p style="text-align: justify" class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem tempore consectetur laboriosam suscipit sunt odit soluta expedita nemo aspernatur, alias, unde perspiciatis cum architecto beatae, nihil quis delectus eum consequuntur?.</p>
            </div>
        </div>
        <div class="col-12 col-lg-6 p-4 bg-slate-100">
            <form action="">
                <div class="my-4">
                    <label class="fs-3 fw-bolder">Ask a Question</label>
                </div>
                <div class="my-4">
                    <input type="text" name="nama" class="form-control rounded-md border-slate-200" placeholder="Nama Kamu">
                </div>
                <div class="my-4">
                    <input type="email" name="email" class="form-control rounded-md border-slate-200" placeholder="Email Kamu">
                </div>
                <div class="my-4">
                    <input type="text" name="nama" class="form-control rounded-md border-slate-200" placeholder="Topik">
                </div>
                <div class="my-4">
                    <textarea name="keterangan" class="form-control" cols="30" rows="10" placeholder="Pertanyaan Kamu?"></textarea>
                </div>
                <div class="my-4">
                    <input type="submit" value="Kirim" class="btn bg-sage text-white w-[100px]">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', true)