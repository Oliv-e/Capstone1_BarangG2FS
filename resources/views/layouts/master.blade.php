<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Furniture Max')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/components/master.css') }}">
    <script src="{{ asset('assets/js/page/navbar-page.js') }}"></script>
    <script src="{{ asset('assets/js/page/kategori-page.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    @hasSection ('css-style')
        @yield('css-style')
    @endif
</head>
<body>
    @include('components.navbar')
    @yield('content')

    @include('components.tentang')

    @include('components.footer')

    @hasSection ('js-scripts')
        @yield('js-scripts')
    @endif
</body>
</html>