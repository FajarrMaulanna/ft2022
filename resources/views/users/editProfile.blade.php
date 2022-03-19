@extends("users.dashboard")

@section("content")

    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Profil Peserta</p>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    @csrf
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $user->nama }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nisn" class="form-label fw-bold">NISN</label>
                        <input type="text" class="form-control" name="nisn" id="nisn" value="{{ $user->nisn }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="tmpLahir" class="form-label fw-bold">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir" id="tmpLahir" value="{{ $user->tmpt_lahir }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="tglLahir" class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tglLahir" value="{{ $user->tgl_lahir }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="domisili" class="form-label fw-bold">Domisili</label>
                        <input type="text" class="form-control" name="domisili" id="domisili" value="{{ $user->domisili }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="gender" class="form-label fw-bold">Jenis Kelamin</label>
                        <select name="jk" id="" class="form-control">
                            @if ($user->jk == 'Laki-Laki')
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            @elseif ($user->jk == "Perempuan")
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-laki">Laki-laki</option>
                            @else
                            <option selected></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="email" class="form-label fw-bold">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="hp" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="hp" id="hp" value="{{ $user->hp }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="sekolah" class="form-label fw-bold">Asal Sekolah</label>
                        @php

                        @endphp
                        <input type="text" class="form-control" name="sekolah" id="sekolah" value="{{  }}">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoP" class="form-label fw-bold">Upload Foto Profile</label>
                        <input type="file" name="" id="fotoP" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between pFoto">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="pp" type="button">Upload</button>
                        <br>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan foto terbaru</li>
                                <li>Foto bebas (formal/non formal) yang rapi dan sopan</li>
                                <li>Foto diambil dari bagian kepala sampai setengah badan</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoB" class="form-label fw-bold">Upload Bukti Pembayaran</label>
                        <input type="file" name="" id="fotoB" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between bFoto">
                            <i class='fs-4 bx bx-file'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="ubp" type="button">Upload</button>
                        <br>
                        <small>(Tipe file Bukti Pembayaran dalam bentuk pdf).</small>
                    </div>
                    <div class="d-flex flex-row-reverse my-3">
                        <button type="submit" class="btn btnEdit text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let pp = document.getElementById("pp"),
            fotoP = document.getElementById("fotoP"),
            pFoto = document.querySelector(".pFoto span"),
            pDel = document.querySelector(".pFoto .bx-trash"),
            ubp = document.getElementById("ubp"),
            fotoB = document.getElementById("fotoB"),
            bFoto = document.querySelector(".bFoto span"),
            bDel = document.querySelector(".bFoto .bx-trash")

        let file

        pp.onclick = () =>{
            fotoP.click()
        }

        fotoP.addEventListener("change", function(){
            file = this.files[0]
            pp.classList.replace("d-block", "d-none")
            pFoto.parentElement.classList.replace("d-none", "d-flex")
            pFoto.innerHTML = encodeURI(file.name)
        })

        pDel.onclick = () =>{
            pp.classList.replace("d-none", "d-block")
            pFoto.parentElement.classList.replace("d-flex", "d-none")
            fotoP.value = ""
            pFoto.innerHTML = ""
        }

        ubp.onclick = () =>{
            fotoB.click()
        }

        fotoB.addEventListener("change", function(){
            file = this.files[0]
            ubp.classList.replace("d-block", "d-none")
            bFoto.parentElement.classList.replace("d-none", "d-flex")
            bFoto.innerHTML = encodeURI(file.name)
        })

        bDel.onclick = () =>{
            ubp.classList.replace("d-none", "d-block")
            bFoto.parentElement.classList.replace("d-flex", "d-none")
            fotoB.value = ""
            bFoto.innerHTML = ""
        }
    </script>

@endsection
