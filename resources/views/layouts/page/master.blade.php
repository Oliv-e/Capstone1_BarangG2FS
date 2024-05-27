<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Furniture Max')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/components/master.css') }}">
    {{-- <script src="{{ asset('assets/js/page/nv2.js') }}"></script> --}}
    <script src="{{ asset('assets/js/page/kategori-page.js') }}"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @hasSection ('css-style')
        @yield('css-style')
    @endif
</head>
<body>
    @include('components.page.navbar')
    @yield('content')

    @hasSection ('about-us')
        @include('components.page.tentang')
    @endif

    @hasSection('footer')
        @include('components.page.footer')
    @endif

    @hasSection ('js-scripts')
        @yield('js-scripts')
    @endif
</body>
</html>