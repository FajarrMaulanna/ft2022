@extends("layouts.dashboard")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p class="fs-3 fw-bold">Daftar Sponsorship dan Media Partner</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menuEvent">
                <span class="aktiv">Sponsorship</span>
            </div>
            <div class="menuEvent">
                <span class="">Media Partner</span>
            </div>
        </div>
        <div class="row mt-3 rowData">
            <table class="table table-responsive tbData tbSM" id="table_sponsor" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Perusahaan</th>
                        <th>Deskripsi</th>
                        <th>Paket</th>
                        <th>Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sponsors as $sponsor)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/sponsor/{{ $sponsor->logo }}') }} alt="">
                                {{ $sponsor->nama }}
                            </Span>
                        </td>
                        <td>21 Orang</td>
                        <td>Silver</td>
                        <td>+62 812-9812-8943</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-3 rowData d-none">
            <table class="table table-responsive tbData tbSM" id="table_media" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama mediapartner</th>
                        <th>Deskripsi</th>
                        <th>Kasta</th>
                        <th>Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/logo.png') }} alt="">
                                Lorem ipsum dolor sit amet.
                            </Span>
                        </td>
                        <td>21 Orang</td>
                        <td>Silver</td>
                        <td>+62 812-9812-8943</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <button class="btn btnTambah" id="openSp" style="width: max-content">Sponsor <i class="bx bx-plus"></i></button> {{-- Sponsor --}}
        <button class="btn btnTambah" id="openMp" style="width: max-content">Mediaparner<i class="bx bx-plus"></i></button> {{-- Mediapartner --}}
    </div>

    <script>
        $(document).ready( function () {
            $('#table_sponsor').DataTable();
        } );

        $(document).ready( function () {
            $('#table_media').DataTable();
        } );

        let menuEvent = document.querySelectorAll(".menuEvent span"),
            rowData = document.querySelectorAll(".rowData")

        menuEvent.forEach(menu=>{
            switch(menu.innerHTML){
                case "Sponsorship":
                    menu.onclick = () =>{
                        rowData[0].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[1].classList.add("d-none")
                        menuEvent[1].classList.remove("aktiv")
                    }
                    break
                case "Media Partner":
                    menu.onclick = () =>{
                        rowData[1].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[0].classList.add("d-none")
                        menuEvent[0].classList.remove("aktiv")
                    }
                    break
            }
        })

        let labels = document.querySelectorAll(".tbData label"),
            inputs = document.querySelectorAll(".tbData .check"),
            spans = document.querySelectorAll(".tbData span i"),
            i

        i = 0
        labels.forEach(label=>{
            label.setAttribute('for', `${i}`)
            a = "<i class='bx bx-x'></i>"
            label.innerHTML = a
            label.onclick = () =>{
                if(a === "<i class='bx bx-x'></i>"){
                    a = "<i class='bx bx-check'></i>"
                    label.classList.add("hijau")
                }else{
                    a = "<i class='bx bx-x'></i>"
                    label.classList.remove("hijau")
                }
                label.innerHTML = a
            }
            i++
        })

        for(let i = 0; i < spans.length; i++){
            spans[i].addEventListener("click", ()=>{
                spans[i].parentElement.classList.replace("d-block", "d-none")
                labels[i].parentElement.classList.replace("d-none", "d-block")
            })
        }

        i = 0
        inputs.forEach(input=>{
            input.setAttribute('id', `${i}`)
            i++
        })
    </script>

@endsection
@section("popup")

<div class="d-none position-absolute top-50 start-50 w-50 p-5 border bg-light translate-middle popupSp" style="z-index: 100;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title d-flex justify-content-between">
                    <p class="fs-3 fw-bold">Tambah Sponsorship</p>
                    <i class="fs-1 fw-bold bx bx-x" id="closeSp"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Perusahaan</label>
                        <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Nama ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Perusahaan</label>
                        <select name="" id="" class="form-select">
                            <option selected></option>
                            <option value="Platinum">Platinum</option>
                            <option value="Diamond">Diamond</option>
                            <option value="Gold">Gold</option>
                            <option value="Silver">Silver</option>
                        </select>
                        <small class="form-text text-muted">Kasta ini akan tampil pada laman beranda, tentang kami, dan data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Deskripsi</label>
                        <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Deskripsi ini akan tampil pada laman beranda, tentang kami, dan data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Upload Logo Perusahaan</label>
                        <input type="file" name="" id="fotoSp" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between spFoto">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash"></i>
                        </div>
                        <button type="button" class="btn btnTambah text-white d-block" id="sponsor">Upload</button>
                    </div>
                    <div class="d-flex flex-row-reverse me-3">
                        <button type="submit" class="btn btnTambah text-white">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="d-none position-absolute top-50 start-50 w-50 p-5 border bg-light translate-middle popupMp" style="z-index: 100;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="title d-flex justify-content-between">
                    <p class="fs-3 fw-bold">Tambah Mediapartner</p>
                    <i class="fs-1 fw-bold bx bx-x" id="closeMp"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Perusahaan</label>
                        <input type="text"
                            class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Nama ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Upload Logo Perusahaan</label>
                        <input type="file" name="" id="fotoMp" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between mpFoto">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash"></i>
                        </div>
                        <button type="button" class="btn btnTambah text-white d-block" id="media">Upload</button>
                    </div>
                    <div class="d-flex flex-row-reverse me-3">
                        <button type="submit" class="btn btnTambah text-white">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    let fotoSp = document.getElementById("fotoSp"),
        spFoto = document.querySelector(".spFoto span"),
        sponsor = document.getElementById("sponsor"),
        trash = document.querySelector(".spFoto .bx-trash"),
        openSp = document.getElementById("openSp"),
        closeSp = document.getElementById("closeSp"),
        popupSp = document.querySelector(".popupSp")

        let file

        openSp.onclick = () => {
            $(".popupSp").fadeIn("slow")
            popupSp.classList.replace("d-none", "d-block")
        }

        closeSp.onclick = () => {
            $(".popupSp").fadeOut("slow")
            popupSp.classList.replace("d-block", "d-none")
        }

        sponsor.onclick = () => {
            fotoSp.click()
        }

        fotoSp.addEventListener("change", function(){
            file = this.files[0]
            sponsor.classList.replace("d-block", "d-none")
            spFoto.parentElement.classList.replace("d-none", "d-flex")
            spFoto.innerHTML = encodeURI(file.name)
        })

        trash.onclick = () =>{
            sponsor.classList.replace("d-none", "d-block")
            spFoto.parentElement.classList.replace("d-flex", "d-none")
            fotoSp.value = ""
            spFoto.innerHTML = ""
        }

    let fotoMp = document.getElementById("fotoMp"),
        mpFoto = document.querySelector(".mpFoto span"),
        media = document.getElementById("media"),
        trashh = document.querySelector(".mpFoto .bx-trash"),
        openMp = document.getElementById("openMp"),
        closeMp = document.getElementById("closeMp"),
        popupMp = document.querySelector(".popupMp")

        openMp.onclick = () => {
            $(".popupMp").fadeIn("slow")
            popupMp.classList.replace("d-none", "d-block")
        }

        closeMp.onclick = () => {
            $(".popupMp").fadeOut("slow")
            popupMp.classList.replace("d-block", "d-none")
        }

        media.onclick = () => {
            fotoMp.click()
        }

        fotoMp.addEventListener("change", function(){
            file = this.files[0]
            media.classList.replace("d-block", "d-none")
            mpFoto.parentElement.classList.replace("d-none", "d-flex")
            mpFoto.innerHTML = encodeURI(file.name)
        })

        trashh.onclick = () =>{
            media.classList.replace("d-none", "d-block")
            mpFoto.parentElement.classList.replace("d-flex", "d-none")
            fotoMp.value = ""
            mpFoto.innerHTML = ""
        }
</script>

@endsection
