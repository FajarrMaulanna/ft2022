@extends("admins.dashboard")

@section("content")

    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Profil Sekolah</p>
        </div>
        <div class="row">
            <div class="col">
                <form action="/school/profile/edit/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ old('id', $user->id) }}">
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nama" class="form-label fw-bold">Nama Sekolah</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" required value="{{ old('nama', $user->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" required value="{{ old('alamat', $user->alamat) }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="email" class="form-label fw-bold">Email Sekolah</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email', $user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="telepon" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" id="telepon" required value="{{ old('telepon', $user->telepon) }}">
                        @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="pj" class="form-label fw-bold">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control @error('pj') is-invalid @enderror" name="pj" id="pj" required value="{{ old('pj', $user->pj) }}">
                        @error('pj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="jabatan_pj" class="form-label fw-bold">Jabatan Penanggung Jawab</label>
                        <input type="text" class="form-control @error('jabatan_pj') is-invalid @enderror" name="jabatan_pj" id="jabatan_pj" required value="{{ old('jabatan_pj', $user->jabatan_pj) }}">
                        @error('jabatan_pj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nip_pj" class="form-label fw-bold">NIP Penanggung Jawab</label>
                        <input type="text" class="form-control @error('nip_pj') is-invalid @enderror" name="nip_pj" id="nip_pj" required value="{{ old('nip_pj', $user->nip_pj) }}">
                        @error('nip_pj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="hp_pj" class="form-label fw-bold">Nomor Telepon/ WhatsApp Penanggung Jawab</label>
                        <input type="text" class="form-control @error('hp_pj') is-invalid @enderror" name="hp_pj" id="hp_pj" required value="{{ old('hp_pj', $user->hp_pj) }}">
                        @error('hp_pj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoP" class="form-label fw-bold">Upload Foto Profile</label>
                        <input type="file" name="logo" id="fotoP" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between pFoto">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block @error('logo') is-invalid @enderror" name="logo" id="pp" type="button">Upload</button>
                        @error('logo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
            pDel = document.querySelector(".pFoto .bx-trash")

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
    </script>

@endsection
