@extends("layouts.landingpage")

@section("title", $slug->nama)

@section("content")

    <section>
        <div class="position-relative jTron" style="height: 460px;">
            <img src={{ url("img/nnc.png") }} alt="" class="img-fluid jumboFT position-absolute top-0" style="z-index: -1">
            <div class="container-fluid jumboSection position-absolute bottom-0">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <img src={{ url("img/profileNNC.png") }} alt="" class="img-fluid">
                    </div>
                    <div class="col-6">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-1">
                                <p class="display-5 text-white mb-0"><i class='bx bx-trophy'></i></p>
                            </div>
                            <div class="col-11">
                                <p class="text-white mb-0 display-6 fw-bold">{{ $slug->nama }}</p>
                                <p class="text-white mb-0 fs-6">{{ $slug->cakupan }}</p>
                            </div>
                        </div>
                        <p class="fs-6 text-white mb-0 kategori">{{ $slug->kategori }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="position-relative page_2 ">
            <div class="position-absolute bgPage2" style="z-index: -1">
                @switch($slug->nama)
                    @case("National Network Competition")
                    <p class="pPage_2 text-white text-start mb-0">NATIONAL</p>
                    <p class="pPage_2 text-white text-end mb-0">NETWORK</p>
                    <p class="pPage_2 text-white text-start mb-0">COMPETITION</p>
                        @break
                    @case("E-Sport : Valorant Tournament")
                    <p class="pPage_2 text-white text-start mb-0">E-SPORT</p>
                    <p class="pPage_2 text-white text-end mb-0">VALORANT</p>
                    <p class="pPage_2 text-white text-start mb-0">TOURNAMENT</p>
                        @break
                    @case("Webinar IT")
                    <p class="pPage_2 text-white text-start mb-0">WEBINAR</p>
                    <p class="pPage_2 text-white text-end mb-0">IT</p>
                    <p class="pPage_2 text-white text-start mb-0">WEBINAR</p>
                        @break
                    @case("Workshop UI/UX")
                    <p class="pPage_2 text-white text-start mb-0">WORKSHOP</p>
                    <p class="pPage_2 text-white text-end mb-0">UI/UX</p>
                    <p class="pPage_2 text-white text-start mb-0">WORKSHOP</p>
                        @break
                    @case("Ideathon")
                    <p class="pPage_2 text-white text-start mb-0">IDEATHON</p>
                    <p class="pPage_2 text-white text-end mb-0">IDEATHON</p>
                    <p class="pPage_2 text-white text-start mb-0">IDEATHON</p>
                        @break
                    @default
                    <p class="pPage_2 text-white text-start mb-0">FIRETECH</p>
                    <p class="pPage_2 text-white text-end mb-0">FIRETECH</p>
                    <p class="pPage_2 text-white text-start mb-0">FIRETECH</p>
                @endswitch
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="deskripsi mt-5">
                        <p class="display-6 fw-bold">Deskripsi</p>
                        <p class="fs-6">{{ $slug->deskripsi }}</p>
                    </div>
                    <div class="linimasa">
                        <p class="display-6 fw-bold">Linimasa</p>
                        @switch($slug->nama)
                            @case("National Network Competition")
                            <div class="timeline position-relative d-flex justify-content-center flex-column align-items-center">
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Februari</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Publikasi pamflet acara</li>
                                        <li>1 Februari 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Maret</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran</li>
                                        <li>1 Maret 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline pendaftaran</li>
                                        <li>15 Maret 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Babak penyisihan</li>
                                        <li>21 Maret 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Seleksi babak penyisihan</li>
                                        <li>28 Maret 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">April</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pengumuman  peserta yang lolos babak penyisihan</li>
                                        <li>4 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Babak semifinal</li>
                                        <li>10 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pengumuman finalis</li>
                                        <li>13 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Konfirmasi kehadiran babak final</li>
                                        <li>14 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline konfirmasi kehadiran babak final</li>
                                        <li>17 April 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Mei</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Technical Meeting babak final</li>
                                        <li>13 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Babak final</li>
                                        <li>14 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4 mb-0">
                                        <li>Closing Ceremonial dan Rewarding</li>
                                        <li>22 Mei 2022</li>
                                    </ul>
                                </div>
                            </div>
                            @break
                            @case("E-Sport : Valorant Tournament")
                            <div class="timeline position-relative d-flex justify-content-center flex-column align-items-center">
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Februari</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Publikasi pamflet acara</li>
                                        <li>1 Februari 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Maret</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran</li>
                                        <li>1 Maret 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">April</p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Mei</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline Pendaftaran</li>
                                        <li>10 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Technical Meeting dan pengambilan slot grup</li>
                                        <li>11 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Tahap Penyisihan</li>
                                        <li>12 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Tahap 16 besar</li>
                                        <li>14 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Tahap 8 besar dan semifinal</li>
                                        <li>15 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Tahap final</li>
                                        <li>21 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4 mb-0">
                                        <li>Pengumuman Pemenang</li>
                                        <li>22 Mei 2022</li>
                                    </ul>
                                </div>
                            </div>
                            @break
                            @case("Webinar IT")
                            <div class="timeline position-relative d-flex justify-content-center flex-column align-items-center">
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Februari</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Publikasi pamflet acara</li>
                                        <li>1 Februari 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Maret</p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">April</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran</li>
                                        <li>1 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline Pendaftaran</li>
                                        <li>15 April 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Mei</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pelaksanaan Webinar</li>
                                        <li>12 Mei 2022</li>
                                    </ul>
                                </div>
                            </div>
                            @break
                            @case("Workshop UI/UX")
                            <div class="timeline position-relative d-flex justify-content-center flex-column align-items-center">
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Februari</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Publikasi pamflet acara</li>
                                        <li>1 Februari 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Maret</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran</li>
                                        <li>7 Maret 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">April</p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Mei</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline Pendaftaran</li>
                                        <li>11 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Opening Workshop</li>
                                        <li>16 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4 mb-0">
                                        <li>Closing Workshop</li>
                                        <li>18 Mei 2022</li>
                                    </ul>
                                </div>
                            </div>
                            @break
                            @case("Ideathon")
                            <div class="timeline position-relative d-flex justify-content-center flex-column align-items-center">
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Februari</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Publikasi pamflet acara</li>
                                        <li>1 Februari 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Maret</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran dan submisi proposal</li>
                                        <li>7 Maret 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">April</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline pendaftaran dan submisi proposal</li>
                                        <li>2 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Penjurian tahap penyisihan</li>
                                        <li>11 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pengumuman tim yang lolos ke tahap final</li>
                                        <li>17 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Pendaftaran ulang dan konfirmasi kehadiran tahap final</li>
                                        <li>18 April 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Deadline dealine pendaftaran ulang dan konfirmasi kehadiran tahap final</li>
                                        <li>20 April 2022</li>
                                    </ul>
                                </div>
                                <div class="time">
                                    <div class="line m-auto">
                                        <p class="fs-6 mb-0 fw-bold">Mei</p>
                                    </div>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Technical Meeting presentasi</li>
                                        <li>12 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4">
                                        <li>Presentasi hasil karya</li>
                                        <li>21 Mei 2022</li>
                                    </ul>
                                    <ul class="position-relative lineUl mt-4 mb-0">
                                        <li>Pengumuman Pemenang</li>
                                        <li>22 Mei 2022</li>
                                    </ul>
                                </div>
                            </div>
                            @break
                            @default
                            <p class="pPage_2 text-white text-start mb-0">FIRETECH</p>
                            <p class="pPage_2 text-white text-end mb-0">FIRETECH</p>
                            <p class="pPage_2 text-white text-start mb-0">FIRETECH</p>
                        @endswitch
                    </div>
                </div>
                <div class="col-5 d-flex dpanduan flex-row-reverse">
                    <div class="panduan mt-5">
                        <p class="display-6 fw-bold">Panduan</p>
                        <p class="fs-6">Detail acara dapat diunduh pada link dibawah ini </p>
                        <a target="_blank" href={{ $slug->panduan }} class="btn fw-bold">
                            <i class='bx bx-download'></i>
                            Unduh
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="foooter position-relative mt-3" style="background: #2ABCFB">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 text-center mt-4">
                    <a class="text-dark" href="https://www.instagram.com/firetech.neotelemetri/"><i class='me-4 bx bxl-instagram'></i></a>
                    <a class="text-dark" href="https://id.linkedin.com/company/neotelemetri"><i class='me-4 bx bxl-linkedin-square'></i></a>
                    <a class="text-dark" href="mailto:neotelemetri.unand@gmail.com"><i class='me-4 bx bxl-google'></i></a>
                    <a class="text-dark" href="https://www.youtube.com/channel/UCrTTynu8IrLqNGLCjd4qCjw"><i class='bx bxl-youtube' ></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-center">
                    <img src={{ url('img/logoo.png') }} alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <p class="fw-bold">&copy; 2022 Firetech UKM Neo Telemetri</p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center position-absolute bottom-0 w-100" style="background: #0083BB; height: 45px;">
            <div class="col-6 justify-content-center d-flex align-items-center">
                <a href="" class="text-dark fw-bold text-decoration-none me-5">Tentang Kami</a>
                <a href="" class="text-dark fw-bold text-decoration-none me-5">Event</a>
                <a href="" class="text-dark fw-bold text-decoration-none">FAQ</a>
            </div>
        </div>
    </section>

    <script>
        // let linimasa = document.querySelector(".linimasa"),
        //     bgPage2 = document.querySelector(".bgPage2")

        // while (linimasa.clientHeight >= bgPage2.clientHeight) {
        //     bgPage2.innerHTML += "<p class='pPage_2 text-white text-start mb-0'>NATIONAL</p><p class='pPage_2 text-white text-end mb-0'>NETWORK</p><p class='pPage_2 text-white text-start mb-0'>COMPETITION</p>"
        // }
    </script>

@endsection