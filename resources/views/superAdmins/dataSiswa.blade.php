@extends("layouts.dashboard")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p class="fs-3 fw-bold">Daftar Siswa</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menuEvent">
                <span class="aktiv">National Network Competition</span>
            </div>
            <div class="menuEvent">
                <span class="">E-Sport: Valorant Tournament</span>
            </div>
            <div class="menuEvent">
                <span class="">Ideathon</span>
            </div>
            <div class="menuEvent">
                <span class="">Webinar IT</span>
            </div>
            <div class="menuEvent">
                <span class="">Workshop UI/UX</span>
            </div>
        </div>
        {{-- NNC --}}
        <div class="row mt-5 rowData">
            <table class="table table-responsive tbData" id="table_nnc" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Tempat dan Tanggal Lahir</th>
                        <th>Sekolah</th>
                        <th>Domisili</th>
                        <th>No. HP</th>
                        <th>Bukti Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nncs as $nnc)
                    <tr>
                        <td>
                            <Span>
                                <img src='img/nnc/
                                @if ($nnc->foto == null)
                                user.png
                                @else
                                {{ $nnc->foto }}
                                @endif
                                ' alt="">
                                {{ $nnc->nama }}
                            </Span>
                        </td>
                        <td>{{ $nnc->nisn }}</td>
                        <td>{{ $nnc->username }}</td>
                        <td>{{ $nnc->email }}</td>
                        <td>{{ $nnc->tmpt_lahir }}, {{ $nnc->tgl_lahir }}</td>
                        <td>{{ $nnc->sekolah->nama }}</td>
                        <td>{{ $nnc->domisili }}</td>
                        <td>{{ $nnc->hp }}</td>
                        <td>
                            <a target="_blank" href={{ route('lihatbuktinnc') }}>
                            @if ($nnc->pembayaran == null)
                            <span class="bayar rounded-pill">Belum</span>
                            @else
                            <span class="nbayar rounded-pill">Sudah</span>
                            @endif
                            </a>
                        </td>
                        <td>
                            <span class="text-end d-block" style="cursor: pointer"><i class='bx bx-edit fs-3' ></i></span>
                            <form class="d-none position-relative d-flex justify-content-between" action="{{ route('editstatusnnc') }}" method="post">
                                @csrf
                                <label for=""></label>
                                <input type="checkbox" class="position-absolute d-none check" name="status" id="">
                                <button type="submit" class="rounded-circle p-1">
                                    <i class='bx bx-save'></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            @if ($nnc->status < 2)
                            <form action="" method="" class="kondisi">
                                @csrf
                                <input type="text" name="kondisi" id="" class="form-control" hidden value="2">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Lolos</button>
                            </form>
                            @else
                            <form action="" method="" class="kondisi">
                                @csrf
                                <input type="text" name="kondisi" id="" class="form-control" hidden value="1">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Tereliminasi</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Valorant --}}
        <div class="row mt-5 rowData d-none">
            <table class="table table-responsive tbData" id="table_valorant" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama Tim</th>
                        <th>Ketua Tim</th>
                        <th>NIM</th>
                        <th>Universitas</th>
                        <th>Nomor Telepon</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/logo.png') }} alt="">
                                Neo : E-Sport
                            </Span>
                        </td>
                        <td>Muhammad Khalish</td>
                        <td>1810912014</td>
                        <td>Universitas Andalas</td>
                        <td>+62 812-9812-8943</td>
                        <td>
                            @if ($i % 2 == 0)
                            <span class="bayar rounded-pill">Sudah</span>
                            @else
                            <span class="nbayar rounded-pill">Belum</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-end d-block" style="cursor: pointer"><i class='bx bx-edit fs-3' ></i></span>
                            <form class="d-none position-relative d-flex justify-content-between" action="" method="">
                                <label for=""></label>
                                <input type="checkbox" class="position-absolute d-none check" name="" id="">
                                <button type="submit" class="rounded-circle p-1">
                                    <i class='bx bx-save'></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            @if ($i % 2 == 0)
                            <form action="" method="" class="kondisi">
                                <input type="text" name="" id="" class="form-control" hidden value="1">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Lolos</button>
                            </form>
                            @else
                            <form action="" method="" class="kondisi">
                                <input type="text" name="" id="" class="form-control" hidden value="0">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Tereliminasi</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        {{-- Ideathon--}}
        <div class="row mt-5 rowData d-none">
            <table class="table table-responsive tbData" id="table_ideathon" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Nomor Telepon</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/logo.png') }} alt="">
                                Press Abram
                            </Span>
                        </td>
                        <td>10294712785</td>
                        <td>Laki-laki</td>
                        <td>SMK Negeri 1 Padang</td>
                        <td>+62 812-9812-8943</td>
                        <td>
                            @if ($i % 2 == 0)
                            <span class="bayar rounded-pill">Sudah</span>
                            @else
                            <span class="nbayar rounded-pill">Belum</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-end d-block" style="cursor: pointer"><i class='bx bx-edit fs-3' ></i></span>
                            <form class="d-none position-relative d-flex justify-content-between" action="" method="">
                                <label for=""></label>
                                <input type="checkbox" class="position-absolute d-none check" name="" id="">
                                <button type="submit" class="rounded-circle p-1">
                                    <i class='bx bx-save'></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            @if ($i % 2 == 0)
                            <form action="" method="" class="kondisi">
                                <input type="text" name="" id="" class="form-control" hidden value="1">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Lolos</button>
                            </form>
                            @else
                            <form action="" method="" class="kondisi">
                                <input type="text" name="" id="" class="form-control" hidden value="0">
                                <button type="submit" class="rounded-pill btn fs-6" style="width: max-content">Tereliminasi</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        {{-- webinar--}}
        <div class="row mt-5 rowData d-none">
            <table class="table table-responsive tbData" id="table_webinar" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Nomor Telepon</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/logo.png') }} alt="">
                                Fulan bin Fulan
                            </Span>
                        </td>
                        <td>10294712785</td>
                        <td>Laki-laki</td>
                        <td>SMK Negeri 1 Padang</td>
                        <td>+62 812-9812-8943</td>
                        <td>
                            @if ($i % 2 == 0)
                            <span class="bayar rounded-pill">Sudah</span>
                            @else
                            <span class="nbayar rounded-pill">Belum</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-end d-block" style="cursor: pointer"><i class='bx bx-edit fs-3' ></i></span>
                            <form class="d-none position-relative d-flex justify-content-between" action="" method="">
                                <label for=""></label>
                                <input type="checkbox" class="position-absolute d-none check" name="" id="">
                                <button type="submit" class="rounded-circle p-1">
                                    <i class='bx bx-save'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        {{-- webinar--}}
        <div class="row mt-5 rowData d-none">
            <table class="table table-responsive tbData" id="table_uiux" style="z-index: 2">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Nomor Telepon</th>
                        <th>Pembayaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td>
                            <Span>
                                <img src={{ url('img/logo.png') }} alt="">
                                Fulani bin Fulan
                            </Span>
                        </td>
                        <td>10294712785</td>
                        <td>Laki-laki</td>
                        <td>SMK Negeri 1 Padang</td>
                        <td>+62 812-9812-8943</td>
                        <td>
                            @if ($i % 2 == 0)
                            <span class="bayar rounded-pill">Sudah</span>
                            @else
                            <span class="nbayar rounded-pill">Belum</span>
                            @endif
                        </td>
                        <td>
                            <span class="text-end d-block" style="cursor: pointer"><i class='bx bx-edit fs-3' ></i></span>
                            <form class="d-none position-relative d-flex justify-content-between" action="" method="">
                                <label for=""></label>
                                <input type="checkbox" class="position-absolute d-none check" name="" id="">
                                <button type="submit" class="rounded-circle p-1">
                                    <i class='bx bx-save'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#table_nnc').DataTable();
        } );

        $(document).ready( function () {
            $('#table_valorant').DataTable();
        } );

        $(document).ready( function () {
            $('#table_ideathon').DataTable();
        } );

        $(document).ready( function () {
            $('#table_webinar').DataTable();
        } );

        $(document).ready( function () {
            $('#table_uiux').DataTable();
        } );

        let menuEvent = document.querySelectorAll(".menuEvent span"),
            rowData = document.querySelectorAll(".rowData")

        menuEvent.forEach(menu=>{
            switch(menu.innerHTML){
                case "National Network Competition":
                    menu.onclick = () =>{
                        rowData[0].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[1].classList.add("d-none")
                        rowData[2].classList.add("d-none")
                        rowData[3].classList.add("d-none")
                        rowData[4].classList.add("d-none")
                        menuEvent[1].classList.remove("aktiv")
                        menuEvent[2].classList.remove("aktiv")
                        menuEvent[3].classList.remove("aktiv")
                        menuEvent[4].classList.remove("aktiv")
                    }
                    break
                case "E-Sport: Valorant Tournament":
                    menu.onclick = () =>{
                        rowData[1].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[0].classList.add("d-none")
                        rowData[2].classList.add("d-none")
                        rowData[3].classList.add("d-none")
                        rowData[4].classList.add("d-none")
                        menuEvent[0].classList.remove("aktiv")
                        menuEvent[2].classList.remove("aktiv")
                        menuEvent[3].classList.remove("aktiv")
                        menuEvent[4].classList.remove("aktiv")
                    }
                    break
                case "Ideathon":
                    menu.onclick = () =>{
                        rowData[2].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[0].classList.add("d-none")
                        rowData[1].classList.add("d-none")
                        rowData[3].classList.add("d-none")
                        rowData[4].classList.add("d-none")
                        menuEvent[0].classList.remove("aktiv")
                        menuEvent[1].classList.remove("aktiv")
                        menuEvent[3].classList.remove("aktiv")
                        menuEvent[4].classList.remove("aktiv")
                    }
                    break
                case "Webinar IT":
                    menu.onclick = () =>{
                        rowData[3].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[0].classList.add("d-none")
                        rowData[1].classList.add("d-none")
                        rowData[2].classList.add("d-none")
                        rowData[4].classList.add("d-none")
                        menuEvent[0].classList.remove("aktiv")
                        menuEvent[1].classList.remove("aktiv")
                        menuEvent[2].classList.remove("aktiv")
                        menuEvent[4].classList.remove("aktiv")
                    }
                    break
                case "Workshop UI/UX":
                    menu.onclick = () =>{
                        rowData[4].classList.remove("d-none")
                        menu.classList.add("aktiv")

                        rowData[0].classList.add("d-none")
                        rowData[1].classList.add("d-none")
                        rowData[2].classList.add("d-none")
                        rowData[3].classList.add("d-none")
                        menuEvent[0].classList.remove("aktiv")
                        menuEvent[1].classList.remove("aktiv")
                        menuEvent[2].classList.remove("aktiv")
                        menuEvent[3].classList.remove("aktiv")
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

        let kondisis = document.querySelectorAll(".kondisi")

        kondisis.forEach(kondisi=>{
            let input = kondisi.querySelector("input"),
                btn = kondisi.querySelector("button")

            if(input.value == "1"){
                btn.classList.add("bayar")
                btn.classList.remove("nbayar")
            }else{
                btn.classList.add("nbayar")
                btn.classList.remove("bayar")
            }
        })


    </script>

@endsection
