<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('css/landingpage.css') }}">

        @if ($title == 'Firetech 2022')
            <link rel="stylesheet" href="{{ url('css/countdownpage.css') }}">
        @endif

        @if ($title == "Login" || $title == "Register" || $title == "Register - National Network Competition" || $title == "Register - Valorant" || $title == "Register - Ideathon"  || $title == "Register - Webinar IT" || $title == "Register - Workshop UI/UX" || $title == "Admin - Login")
            <link rel="stylesheet" href={{ url('css/users.css') }}>
        @endif

        @if ($title == "About Us")
            <link rel="stylesheet" href={{ url('css/aboutUs.css') }}>
        @endif

        @if ($title == "Event" || $title = "Landingpage")
            <link rel="stylesheet" href={{ url('css/event.css') }}>
        @endif

        <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">

        {{-- Icon --}}
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="shortcut icon" href={{ url('img/logo.png') }} type="image/x-icon">

        <title>@yield("title")</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100 navZ" id="navbar">
            <div class="container-fluid mx-4">
                <a class="navbar-brand" href="#">
                    <img src={{ url('img/logo.png') }} alt="FireTech" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto"></ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 fs-6">
                        <li class="nav-item me-5 @if($title == "Login" || $title == "Register") ms-5 @endif">
                            <a class="nav-link text-FT" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item me-5 @if($title == "Login User" || $title == "Register User") ms-5 @endif dropdown">
                            <a class="nav-link text-FT dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Event
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($events as $event)
                                <li><a class="dropdown-item text-FT" href="/event/{{ $event->slug }}">{{ $event->nama }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item me-5 @if($title == "Login" || $title == "Register") ms-5 @endif">
                            <a class="nav-link text-FT" href="{{ route('aboutus') }}">Tentang Kami</a>
                        </li>
                        {{-- <li class="nav-item me-5 @if($title == "Login User" || $title == "Register User") ms-5 @endif">
                            <a class="nav-link text-FT" href="#">FAQ</a>
                        </li> --}}
                        @switch($title)
                            @case("Login")
                                @break
                            @case("Register")
                                @break
                            @case("Admin - Login")
                                @break
                            @default
                                <li class="nav-item me-5">
                                    <a class="nav-link text-FT bg-outline-FT btn" href={{ route('register') }} style="width: 91px;">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bg-FT text-white btn" href={{ route('login') }} style="width: 70px;">Login</a>
                                </li>
                                @break
                        @endswitch
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>
        <script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
        <script>
            let as = document.querySelectorAll(".nav-link")
            as.forEach(a => {
                a.classList.add('fw-bold', 'text-white')
            })

            let hideScroll = window.pageYOffset;

            window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;

                if (hideScroll > window.pageYOffset) {
                    document.getElementById("navbar").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-82px";
                }

                if(window.pageYOffset > 82){
                    document.getElementById("navbar").classList.add("bg-light")
                }else{
                    document.getElementById("navbar").classList.remove("bg-light")
                }

                hideScroll = currentScrollPos;
            }
        </script>
    </body>
</html>
