@extends("layouts.dashboard")

@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="title">
                    <p class="fs-3 fw-bold">Beranda</p>
                </div>
                <div class="salam p-3">
                    <p class="fs-4 fw-bold mt-3">Cie, Admin :)</p>
                    <p class="fs-6" style="text-align: justify">
                        Ini merupakan Laman dashboard admin. Jangan berharap ucapan selamat datang dari sistem ya!
                    </p>
                </div>
            </div>
            <div class="col-6">
                <div class="title invisible">
                    <p class="fs-3 fw-bold">Beranda</p>
                </div>
                <div class="kalender border">
                    <p class="fs-4 fw-bold">Kalender</p>
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-evenly">
                            <i class='fs-4 fw-bold bx bx-left-arrow-alt' id="previous" style="cursor: pointer; z-index: 3;"></i>
                            <p class="fs-6 fw-bold mb-0" id="judul-kalender"></p>
                            <i class='fs-4 fw-bold bx bx-right-arrow-alt' id="next" style="cursor: pointer; z-index: 3;"></i>
                        </div>
                    </div>
                    <table class="w-100 isiKalendar">
                        <thead>
                            <tr>
                                <td>
                                    <p class="mb-0 text-center fw-bold">M</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">T</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">W</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">T</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">F</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">S</p>
                                </td>
                                <td>
                                    <p class="mb-0 text-center fw-bold">S</p>
                                </td>
                            </tr>
                        </thead>
                        <tbody id="isi-kalender"></tbody>
                    </table>
                </div>
                <div class="kegiatan mt-3">
                    <div class="titleKegiatan m-auto">
                        <p class="fs-6 fw-bold">Kegiatan</p>
                    </div>
                    <div class="boxKegiatan d-flex justify-content-around align-items-center">
                        <div class="tanggalKegiatan d-flex flex-column align-items-center">
                            <p class="mb-0 fs-6 fw-bold">21</p>
                            <p class="mb-0 fs-6 fw-bold">Maret</p>
                        </div>
                        <div class="isiKegiatan d-flex flex-column">
                            <p class="mb-0 fs-6 fw-bold">Babak Penyisihan</p>
                            <p class="mb-0 date">Kerjakan ujian pada Menu Ujian</p>
                        </div>
                    </div>
                    <div class="boxKegiatan d-flex justify-content-around align-items-center">
                        <div class="tanggalKegiatan d-flex flex-column align-items-center">
                            <p class="mb-0 fs-6 fw-bold">28</p>
                            <p class="mb-0 fs-6 fw-bold">Maret</p>
                        </div>
                        <div class="isiKegiatan d-flex flex-column">
                            <p class="mb-0 fs-6 fw-bold">Seleksi Babak Penyisihan</p>
                            <p class="mb-0 date">Hasil Ujian diseleksi untuk babak semifinal  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src={{ url('js/calendar.js') }}></script>

@endsection
