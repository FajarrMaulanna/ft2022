@extends("valorants.dashboard")

@section("content")

{{-- Bagian belum punya data --}}
<div class="container-fluid d-none">
    <div class="row">
        <div class="col">
            <div class="title">
                <p class="fs-3 fw-bold">Profil Tim</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <img src={{ url("img/nodata.png") }} alt="" class="img-fluid d-block m-auto">
            <p class="fs-4 fw-bold text-center mt-3">
                Waduh, Data tim kamu belum ditemukan. Ayo lengkapi!
            </p>
            <a href={{ route("valorant/profil/edit") }} class="btn btnEdit d-flex align-items-center m-auto">
                <i class="fs-4 bx bx-edit text-dark"></i>
                <p class="fs-6 mb-0 text-dark">Edit Profil</p>
            </a>
        </div>
    </div>
</div>

{{-- Bagian sudah ada data --}}
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="title">
                <p class="fs-3 fw-bold">Profil Tim</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-between align-items-center mx-3">
        <img src={{ url("img/logo.png") }} alt="" class="img-fluid" style="width: 100px">
        <a href={{ route("valorant/profil/edit") }} class="btn btnEdit d-flex align-items-center">
            <i class="fs-4 bx bx-edit text-dark"></i>
            <p class="fs-6 mb-0 text-dark">Edit Profil</p>
        </a>
    </div>
    <div class="row justify-content-evenly mt-3">
        @for ($i = 0; $i < 5; $i++)
        <div class="cardTim mb-3">
            <div class="heroTim">
                <img src={{ url('img/profil.png') }} alt="" class="src">
            </div>
            <p class="fs-4 fw-bold mb-0 text-white position-absolute nickname">Lawakobadu</p>
            <div class="textTim position-absolute">
                <p class="fs-6 mb-0 text-white">Ahmad Fadli Ramadhan</p>
                <p class="fs-6 mb-0 text-white">20 tahun</p>
            </div>
        </div>
        @endfor
    </div>
    <div class="row justify-content-between">
        <div class="col-6">
            <p class="fs-5 fw-bold">Pertandingan</p>
            <p class="fs-6">Belum ada hasil pertandingan</p>
            <div class="row ms-3">
                <div class="col-4 bg-light">
                    <p class="fs-6 mb-0 fw-bold">16 Besar (Bo1)</p>
                </div>
                <div class="col-4 bg-light">
                    <p class="date text-end mb-0">11 Mei 2022</p>
                </div>
            </div>
            <div class="row ms-3">
                <div class="col-3 bg-light d-flex justify-content-between align-items-center">
                    <img src={{ url("img/logo.png") }} alt="" class="img-fluid" style="width: 32px">
                    <p class="fs-6 mb-0 fw-bold">NT E-Sport</p>
                </div>
                <div class="col-2 bg-light">
                    <p class="fs-6 text-center mb-0">1 : 0</p>
                </div>
                <div class="col-3 bg-light d-flex justify-content-between align-items-center">
                    <p class="fs-6 mb-0 fw-bold">NT E-Sport</p>
                    <img src={{ url("img/logo.png") }} alt="" class="img-fluid" style="width: 32px">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="title">
                <p class="fs-5 fw-bold">Panduan</p>
                <p class="fs-6">Detail acara dapat diunduh pada link dibawah ini </p>
                <a href="" class="btn btnEdit d-flex align-items-center">
                    <i class="fs-4 bx bx-download text-dark"></i>
                    <p class="fs-6 mb-0 text-dark">Unduh</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    let tims = document.querySelectorAll(".cardTim")

    tims.forEach(tim=>{
        tim.onmouseover = () =>{
            tim.querySelector(".nickname").style.bottom = "40px"
            tim.querySelector(".textTim").style.bottom = "0px"
        }
        tim.onmouseout = () =>{
            tim.querySelector(".nickname").style.bottom = `0px`
            tim.querySelector(".textTim").style.bottom = `-45px`
        }
    })
</script>

@endsection