<!doctype html>
<html lang="en">
    <head>
        <title>{{ $title }}</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- CSS --}}
        <link rel="stylesheet" href={{ url('css/comingsoon.css') }}>

        {{-- Icon --}}
        <link rel="shortcut icon" href={{ url('img/logo.png') }} type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body>

        <div class="p-0 container-fluid">
            <div class="row">
                <div class="col">
                    <video loop muted autoplay class="video">
                        <source src={{ url('video/video.mp4') }} type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-xl navbar-light">
            <a class="navbar-brand ms-5" href="{{ route('home') }}">
                <img src={{ url('img/logo.png') }} alt="FireTech" srcset="">
            </a>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                </ul>
            </div>
        </nav>

        <div class="container-fluid position-absolute top-50 start-50 translate-middle">
            <div class="row justify-content-center">
                <div class="text-dark text-coming">
                    <p class="fs-7 fw-bold">Under Contruction</p>
                    <p class="display-5 fw-bold f-rubik">Coming Soon</p>
                    <p class="fs-6 fw-bold">Our Websites is currently undergoing scheduled maintenance. We should be back shortly. Thank you for your patience</p>
                </div>
            </div>
        </div>

        <div class="container-fluid position-absolute bottom-0">
            <div class="row justify-content-center">
                <div class="col-6">
                    <p class="fs-5 text-dark fw-bold text-center">Stay in touch</p>
                    <div class="d-flex justify-content-center">
                        <a class="text-dark" href="mailto:neotelemetri.unand@gmail.com"><i class='me-4 bx bxl-google'></i></a>
                        <a class="text-dark" href="https://www.instagram.com/firetech.neotelemetri"><i class='me-4 bx bxl-instagram-alt' ></i></a>
                        <a class="text-dark" href="https://web.facebook.com/neotelemetri.unand"><i class='me-4 bx bxl-facebook-square' ></i></a>
                        <a class="text-dark" href="https://www.youtube.com/channel/UCrTTynu8IrLqNGLCjd4qCjw"><i class='me-4 bx bxl-youtube' ></i></a>
                        <a class="text-dark" href="https://id.linkedin.com/company/neotelemetri"><i class='me-4 bx bxl-linkedin-square' ></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid h-100 videoo bg-ft"></div>


        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
