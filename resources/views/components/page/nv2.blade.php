@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('assets/css/components/nv2.css')}}">
<div class="flex justify-between items-center px-4 bg-[#E6C7AB] border-b-4 border-[#7c8046]" id="navbar">
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/img/logoFM.png')}}" alt="logo" width="80px">
        <h1 class="font-bold">Furniture Max</h1>
    </div>
    <i class="bi bi-list" style="font-size: 50px" id="list-responsive"></i>
    <ul class="flex gap-4 items-center" id="desktop-menu">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#promo">Promo</a></li>
        <li><a href="#katalog">Kategori</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>  
    <div class="flex items-center" id="desktop-menu">
        @if(Auth::check())
            <button class="bg-[#7C8046] py-2 px-4 text-white rounded-md" id="userDropdown">
            <i class="bi bi-person-fill"></i> {{Auth::user()->nama}} <i class="bi bi-caret-down-fill"></i></button>
            <ul class="absolute hidden mt-24 bg-[#7c8046] text-black rounded-md shadow-lg" id="userDropdownMenu">
                <li class="text-center capitalize text-white p-2">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
                    </form>
                </li>
            </ul>
        @else
        <form action="{{route('login')}}">
            <button class="bg-[#7C8046] py-2 px-4 text-white rounded-md">
                <i class="bi bi-box-arrow-in-right"></i> Login</button>
        </form>
        @endif
    </div>
</div>
<div class="hidden" id="mobile-menu">
    <div class="flex flex-col gap-1 items-center">
        <a href="#home" class="w-full text-center text-white uppercase bg-[#7C8046] p-5">Home</a>
        <a href="#promo" class="w-full text-center text-white uppercase bg-[#7C8046] p-5">Promo</a>
        <a href="#katalog" class="w-full text-center text-white uppercase bg-[#7C8046] p-5">Kategori</a>
        <a href="#tentang" class="w-full text-center text-white uppercase bg-[#7C8046] p-5">Tentang</a>
        <a href="#kontak" class="w-full text-center text-white uppercase bg-[#7C8046] p-5">Kontak</a>
        @if (Auth::check())
            <p class="w-full uppercase p-5"><i class="bi bi-person-fill"></i> {{Auth::user()->nama}}</p>
            <form action="{{route('logout')}}" method="POST" class="p-5 bg-[#7c8046] w-full">
            @csrf
                <button type="submit" class="text-white capitalize text-center w-full"><i class="bi bi-box-arrow-in-left"></i> Logout</button>
            </form>
        @endif
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