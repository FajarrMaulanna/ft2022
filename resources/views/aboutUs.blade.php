@extends("layouts.landingpage")

@section("title", $title)

@section("content")

    <section class="page_1 position-relative">
        <div class="position-absolute bgFontFT22">
            <p class="bgFontFT mb-0">Tentang</p>
            <p class="bgFontFT mb-0">Kami</p>
        </div>
        <div class="container-fluid header">
            <div class="row justify-content-center rowAboutUs">
                <div class="col-5" data-anijs="if: scroll, on: window, do: bounceInRight animated, before: $scrollReveal repeat">
                    <img src="img/aboutUs.png" class="img-fluid" alt="">
                </div>
                <div class="col-4" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: $scrollReveal repeat">
                    <p class="display-5 fw-bold" >Tentang Kami</p>
                    <p class="fs-6 fw-bold">Firetech telah diselenggarakan sejak tahun 2014</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page_1">
        <div class="container-fluid">
            <div class="row justify-content-center rowInfo" data-anijs="if: scroll, on: window, do: bounceInDown animated, before: $scrollReveal repeat">
                <div class="col-3 w-max">
                    <div class="cardInfo">
                        <p class="text-center display-5 color-blue mb-0 fw-bold">3.500+</p>
                        <p class="text-center fs-5 mb-0 fw-bold">Peserta</p>
                    </div>
                </div>
                <div class="col-3 w-max">
                    <div class="cardInfo">
                        <p class="text-center display-5 color-blue mb-0 fw-bold">15+</p>
                        <p class="text-center fs-5 mb-0 fw-bold">Event</p>
                    </div>
                </div>
                <div class="col-3 w-max">
                    <div class="cardInfo">
                        <p class="text-center display-5 color-blue mb-0 fw-bold">12+</p>
                        <p class="text-center fs-5 mb-0 fw-bold">Sponsorship</p>
                    </div>
                </div>
                <div class="col-3 w-max">
                    <div class="cardInfo">
                        <p class="text-center display-5 color-blue mb-0 fw-bold">30+</p>
                        <p class="text-center fs-5 mb-0 fw-bold">Media Partner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page_1">
        <div class="container-fluid">
            <div class="row rowDesc position-relative">
                <div class="col-4" data-anijs="if: scroll, on: window, do: bounceInRight animated, before: $scrollReveal repeat">
                    <div class="mt-5">
                        <p class="display-5 fw-bold">FIRETECH</p>
                        <p class="fs-5 mb-0 fw-bold">Acara IT Terbesar yang Diselenggarakan Unit Kegiatan Mahasiswa (UKM) Neo Telemetri, Universitas Andalas</p>
                    </div>
                </div>
                <div class="col-4" >
                    <img src={{ url("img/3.png") }} alt="" class="img-fluid" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: $scrollReveal repeat">
                    <img src={{ url("img/4.png") }} alt="" class="img-fluid mt-3" data-anijs="if: scroll, on: window, do: bounceInLeft animated, before: $scrollReveal repeat">
                    <img src={{ url("img/5.png") }} alt="" class="img-fluid position-img" data-anijs="if: scroll, on: window, do: bounceInRight animated, before: $scrollReveal repeat">
                </div>
            </div>
        </div>
    </section>
    <section class="page_1 position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row rowSponsor">
            @foreach ($diamonds as $diamond)
            @if ($diamond->nama == null)
            @else
                <div class="col" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: $scrollReveal repeat">
                    <div class="cardSponsor bg-dark">
                        <p class="fs-3 fw-bold color-blue ">Diamond Sponsor</p>
                        <div class="d-flex flex-column align-items-center">
                            <img src="img/sponsor/{{ $diamond->logo }}" alt="" class="img-fluid imgPlatinum">
                            <p class="textDesc fs-6 mb-0 text-white">
                                {{ $diamond->nama }}
                                <br>
                                {{ $diamond->deskripsi }}
                            </p>
                            </div>
                        </div>
                    </div>
            @endif
            @endforeach
            </div>
            <div class="row rowSponsor">
            @foreach ($platinums as $platinum)
            @if ($platinum->nama == null)
            @else
                <div class="col">
                    <div class="cardSponsor border border-secondary">
                        <p class="fs-3 fw-bold text-dark">Platinum Sponsor</p>
                        <div class="imgg">
                            <div class="d-flex flex-column align-items-center">
                                <img src="img/sponsor/{{ $platinum->logo }}" alt="" class="img-fluid imgDiamond">
                                <p class="textDesc fs-6 mb-0">
                                    {{ $platinum->nama }}
                                    <br>
                                    {{ $paltinum->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            <div class="row justify-content-center mt-5">
                <div class="col-9 bronze">
                    {{-- <p class="fs-3 fw-bold text-dark" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">Gold Sponsor</p> --}}
                    @foreach ($golds as $gold)
                    <img src="img/sponsor/{{ $gold->logo }}" alt="" class="img-fluid imgGold" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-9 bronze">
                    {{-- <p class="fs-3 fw-bold text-dark"data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">Silver Sponsor</p> --}}
                    @foreach ($silvers as $silver)
                    <img src="img/sponsor/{{ $silver->logo }}" alt="" class="img-fluid imgSilver" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-9 bronze">
                    <p class="fs-3 fw-bold text-dark" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">Media Partner</p>
                    @foreach ($partners as $partner)
                    <img src="img/partner/{{ $partner->logo }}" alt="" class="img-fluid imgGold" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="foooter position-relative bottom-0 mt-3" style="background: #2ABCFB" data-anijs="if: scroll, on: window, do: bounceInUp animated, before: $scrollReveal repeat">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 text-center mt-4">
                    <a class="text-dark" href="https://www.instagram.com/firetech.neotelemetri" ><i class='me-4 bx bxl-instagram-alt'></i></a>
                    <a class="text-dark" href="https://id.linkedin.com/company/neotelemetri" ><i class='me-4 bx bxl-linkedin-square'></i></a>
                    <a class="text-dark" href="mailto:neotelemetri.unand@gmail.com" ><i class='me-4 bx bxl-google'></i></a>
                    <a class="text-dark" href="https://www.youtube.com/channel/UCrTTynu8IrLqNGLCjd4qCjw" ><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    <img src={{ url('img/logoo.png') }} alt="" class="img-fluid" data-anijs="if: scroll, on: window, do: tada animated, before: $scrollReveal repeat">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <p class="fw-bold">&copy; 2022 Firetech UKM Neo Telemetri</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center position-absolute bottom-0 w-100" style="background: #0083BB; height: 45px;">
            <div class="col-6 justify-content-center d-flex align-items-center" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: $scrollReveal repeat">
                <a href={{ route("home") }} class="text-dark fw-bold text-decoration-none">Beranda</a>
                {{-- <a href="" class="text-dark fw-bold text-decoration-none">FAQ</a> --}}
            </div>
        </div>
    </section>

    <script>
        // let foto = document.querySelector('.imgFT'),
        //     srcFoto = ['img/3.png', 'img/4.png', 'img/5.png'],
        //     i = 0
        // setInterval(() => {

        //     if(i >= srcFoto.length){
        //         i = 0
        //     }
        //     foto.src = srcFoto[i]
        //     i+=1
        // }, 1000);

        // let aboutUs = document.querySelector(".aboutUs")

    </script>

@endsection
