@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('assets/css/components/navbar.css')}}">
<div class="flex justify-between items-center px-4 bg-white border-b-4 border-sage" id="navbar">
    <div class="flex items-center gap-2">
        <a href="{{route('dashboard')}}">
            <img src="{{ asset('assets/img/logoFM2.png')}}" alt="logo" class="py-2" width="200px">
        </a>
    </div>
    <i class="bi bi-list text-sage" style="font-size: 50px" id="list-responsive"></i>
    <ul class="flex gap-4 items-center" id="desktop-menu">
        <li><a href="#home" class="text-sage active">Home</a></li>
        <li><a href="#promo" class="text-sage">Promo</a></li>
        <li><a href="#katalog" class="text-sage">Produk</a></li>
        <li><a href="#tentang" class="text-sage">Tentang</a></li>
        <li><a href="#kontak" class="text-sage">Kontak</a></li>
    </ul>
    {{-- BUG NAVBAR TIDAK DISPLAY KALAU DARI MOBILE KE DESKTOP --}}
    <div class="flex items-center" id="desktop-menu">
        @if(Auth::check())
            <button class="bg-sage py-2 px-4 text-white rounded-md" id="userDropdown">
            <i class="bi bi-person-fill"></i> {{Auth::user()->nama}} <i class="bi bi-caret-down-fill"></i></button>
            <ul class="absolute hidden mt-36 bg-sage text-black rounded-md shadow-lg" id="userDropdownMenu">
                <li class="text-center capitalize text-white p-2">
                    @if (Auth::user()->role == "admin" || Auth::user()->role == "super-admin")
                    <div class="py-2">
                        <a href="{{route('dashboard')}}" class="text-white capitalize text-center w-full"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
                    </div>
                    <hr class="border border-white">
                    @endif
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="py-2"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
                    </form>
                </li>
            </ul>
        @else
        <form action="{{route('login')}}">
            <button class="bg-sage py-2 px-4 text-white rounded-md">
                <i class="bi bi-box-arrow-in-right"></i> Login</button>
        </form>
        @endif
    </div>
</div>
<div class="hidden bg-white" id="mobile-menu">
    <div class="flex flex-col gap-1 items-center bg-white" style="margin-top: 0.59rem">
        <a href="#home" class="w-full text-center text-white uppercase bg-sage p-5">Home</a>
        <a href="#promo" class="w-full text-center text-white uppercase bg-sage p-5">Promo</a>
        <a href="#katalog" class="w-full text-center text-white uppercase bg-sage p-5">Kategori</a>
        <a href="#tentang" class="w-full text-center text-white uppercase bg-sage p-5">Tentang</a>
        <a href="#kontak" class="w-full text-center text-white uppercase bg-sage p-5">Kontak</a>
        <div class="flex flex-col gap-1 w-full">
            @if (Auth::check())
            <p class="w-full uppercase p-5"><i class="bi bi-person-fill"></i> {{Auth::user()->nama}}</p>
            @if (Auth::user()->role == "admin" || Auth::user()->role == "super-admin")
                <div class="p-5 bg-sage text-center">
                    <a href="{{route('dashboard')}}" class="text-white mx-auto capitalize text-center w-full"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
                </div>
            @endif
            <form action="{{route('logout')}}" method="POST" class="p-5 bg-sage w-full">
            @csrf
                <button type="submit" class="text-white capitalize text-center w-full"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
            </form>
        @endif
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        
        @if(Auth::check())
            var button = document.getElementById('userDropdown');
            var dropdownMenu = document.getElementById('userDropdownMenu');
            dropdownMenu.style.width = button.offsetWidth + 'px';
        @endif

        $('#list-responsive').click(function (e) { 
            e.preventDefault();
            $(this).toggleClass('bi-list bi-x');
            $('#mobile-menu').toggle();
        });
        $('#userDropdown').click(function (e) {
            e.preventDefault();
            $('#userDropdownMenu').toggleClass('hidden block');
        });

        function highlightNavbarLink() {
            const fromTop = $(window).scrollTop() + $(window).innerHeight() / 4;
            let activeLinkFound = false;

            $('#desktop-menu a, #mobile-menu a').each(function() {
                const section = $($(this).attr('href'));

                if (
                    section.offset().top <= fromTop &&
                    section.offset().top + section.outerHeight() > fromTop
                ) {
                    $(this).addClass('active');
                    activeLinkFound = true;
                } else {
                    $(this).removeClass('active');
                }
            });

            if (!activeLinkFound && ($(window).innerHeight() + $(window).scrollTop()) >= $(document).outerHeight()) {
                $('#desktop-menu a, #mobile-menu a').each(function() {
                    const section = $($(this).attr('href'));
                    if (section.attr('id') === 'kontak') {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                });
            }
        }

        $(window).on('scroll', highlightNavbarLink);
        highlightNavbarLink();
    });
</script>
