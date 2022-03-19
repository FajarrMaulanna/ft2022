@extends('layouts.landingpage')

@section('title', $title)
@section('content')

    <section class="page_1">
        <div class="position-relative w-100">
            <video muted autoplay class="video">
                <source src={{ url('video/video.mp4') }} type="">
            </video>
            <div class="videoo bg-ft">
                <div class="fire">
                    <p class="display-3 fw-bold text-white text-center">Firetech 2022</p>
                    <p class="fs-4 fw-bold text-white text-center">Grand Launching</p>
                    <div class="row fw-bold text-white">
                        <div class="col time me-5">
                            <p class="display-3 mb-0 fw-bold" id="day"></p>
                            <p class="fs-5 mb-0 fw-bold">Days</p>
                        </div>
                        <div class="col time me-5 text-white">
                            <p class="display-3 mb-0 fw-bold" id="hour"></p>
                            <p class="fs-5 mb-0 fw-bold">Hours</p>
                        </div>
                        <div class="col time me-5 text-white">
                            <p class="display-3 mb-0 fw-bold" id="minute"></p>
                            <p class="fs-5 mb-0 fw-bold">Minutes</p>
                        </div>
                        <div class="col time text-white">
                            <p class="display-3 mb-0 fw-bold" id="second"></p>
                            <p class="fs-5 mb-0 fw-bold">Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page_2 position-relative">
        <div class="position-relative page_2">
            <div class="position-absolute bgPage2">
                <p class="pPage_2 text-white text-center mb-0">FIRETECH</p>
                <p class="pPage_2 text-white text-end mb-0 aboutFT">2022</p>
            </div>
        </div>
        <div class="container-fluid position-absolute top-50 start-50 translate-middle containerApaItu">
            <div class="row justify-content-center rowApaItu">
                <div class="col-5 fw-bold" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                    <div class="text">
                        <p class="fs-5 jAbout mb-0">Apa itu Firetech?</p>
                        <p class="fs-2 bAbout mb-0" style="text-align: justify">Merupakan Acara IT Terbesar Tahunan yang diselenggarakan  oleh Unit Kegiatan Mahasiswa (UKM) Neo Telemetri, Universitas Andalas.</p>
                    </div>
                </div>
                <div class="col-5" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
                    <img src={{ url('img/3.png') }} alt="" class="position-relative imgFT" style="left: 75px; z-index: 1; width: 150px;">
                    <img src={{ url('img/1.png') }} alt="" class="position-relative imgFT" style="z-index: 2; width: 200px;">
                    <img src={{ url('img/2.png') }} alt="" class="position-relative imgFT" style="right: 75px; z-index: 1; width: 150px;">
                </div>
            </div>
        </div>
        <div class="container-fluid position-absolute containerInfo" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: $scrollReveal repeat">
            <div class="row justify-content-center rowInfo">
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

    <section class="page_3 d-flex justify-content-center align-items-center" style="background: #2ABCFB">
        <div class="container-fluid">
            <div class="row justify-content-evenly">
                <div class="col-4" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
                    <p class="fs-1 fw-bold">Event</p>
                    <p class="fs-5 fw-bold" style="text-align: justify">Firetech tahun ini memiliki 5 acara utama yang berbeda dari Firetech sebelumnya, yaitu Lomba Keterampilan Siswa (LKS) tingkat Sumatera Barat, Riau dan Jambi, E-Sport : Valorant Tournament, Webinar IT, UI/UX Academy dan Ideathon.</p>
                </div>
                <div class="col-5" data-anijs="if: scroll, on: window, do: fadeIn animated, before: $scrollReveal repeat">
                    <div class="direction d-flex justify-content-center">
                        <button type="button" class="btn border border-dark" id="left"><i class='bx bxs-chevron-left fs-2' ></i></button>
                        <button type="button" class="btn border border-dark ms-3 " id="right"><i class='bx bxs-chevron-right fs-2' ></i></button>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 414px;">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($events as $event)
                        <div class="card text-start cardFT" style='--i:{{ $i++ }}'>
                            <img class="card-img-top" src={{ url('img/4.png') }} alt="">
                            <div class="card-body p-0">
                                <p class="fs-5 mb-0"><i class='bx bx-trophy'></i><b>{{ $event->nama }}</b></p>
                                <p class="fs-6">{{ $event->cakupan }}</p>
                                <p class="fs-6">Asah kemampuanmu dan raih gelar juara didepan mata</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page_5 position-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row rowSponsor">
            @foreach ($diamonds as $diamond)
            @if ($diamond->nama == null)
            @else
                <div class="col" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: $scrollReveal repeat">
                    <div class="cardSponsor bg-dark">
                        <p class="fs-3 fw-bold color-blue ">Diamond Sponsor</p>
                        <div class="d-flex flex-column align-items-center flex-grow-1 justify-content-center">
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
                    <p class="fs-3 fw-bold text-dark" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">Gold Sponsor</p>
                    @foreach ($golds as $gold)
                    <img src="img/sponsor/{{ $gold->logo }}" alt="" class="img-fluid imgGold" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-9 bronze">
                    <p class="fs-3 fw-bold text-dark"data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">Silver Sponsor</p>
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

    {{-- <section class="page_4 position-relative">
        <div class="position-relative page_4">
            <div class="position-absolute bgPage2 w-100 h-100"></div>
        </div>
        <div class="container-fluid position-absolute top-50 start-50 translate-middle">
            <div class="row justify-content-center">
                <div class="col-4">
                    <p class="fs-1 fw-bold">Pendapat Mereka</p>
                </div>
                <div class="col-5"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5"></div>
                <div class="col-4">
                    <div class="direction d-flex justify-content-end">
                        <button type="button" class="btn border border-dark" id="Left"><i class='bx bxs-chevron-left fs-2' ></i></button>
                        <button type="button" class="btn border border-dark ms-3" id="Right"><i class='bx bxs-chevron-right fs-2' ></i></button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-5">
                    <div class="text">
                        <p class="fw-bold testimoni"></p>
                        <p class="fw-bold userName"></p>
                        <p class="fw-bold location">Siswa - </p>
                    </div>
                </div>
                <div class="col-4 d-flex flex-row-reverse">
                    <img src={{ url('img/user.png') }} alt="" class="img-fluid logoTestimoni">
                </div>
            </div>
            <div class="row justify-content-center" style="height: 12px">
                <div class="col-6 d-flex justify-content-center mt-5 dots"></div>
            </div>
        </div>
    </section> --}}

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
                <a href={{ route("aboutus") }} class="text-dark fw-bold text-decoration-none">Tentang Kami</a>
                {{-- <a href="" class="text-dark fw-bold text-decoration-none">FAQ</a> --}}
            </div>
        </div>
    </section>

    <script src={{ url('js/countdownpage.js') }}></script>
@endsection
