@extends("valorants.dashboard")

@section("content")

    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Edit Profil</p>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="">
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaTim" class="form-label fw-bold">Nama Tim</label>
                        <input type="text" class="form-control" name="" id="namaTim">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="logoTim" class="form-label fw-bold">Upload Logo Tim</label>
                        <input type="file" name="" id="logoTim" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between logoT">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="logoT" type="button">Upload</button>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan logo dengan rasio 1:1</li>
                                <li>Logo dengan resolusi HD</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>

                    <p class="fs-5 fw-bold mb-0">Ketua Tim</p>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="ketua" class="form-label fw-bold">Nickname</label>
                        <input type="text" class="form-control" name="" id="ketua">
                        <small>Nickname ini akan digunakan sebagai profil pada dashboard</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaketua" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="namaketua">
                        <small>Nama Lengkap ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nim" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" name="" id="nim">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="universitas" class="form-label fw-bold">Nama Universitas</label>
                        <input type="text" class="form-control" name="" id="universitas">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="noketua" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="" id="noketua">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoKetua" class="form-label fw-bold">Upload Foto Profil</label>
                        <input type="file" name="" id="fotoKetua" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between fotoK">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="fotoK" type="button">Upload</button>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan foto terbaru</li>
                                <li>Foto bebas (formal/non formal) yang rapi dan sopan</li>
                                <li>Foto diambil dari bagian kepala sampai setengah badan</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>

                    <p class="fs-5 fw-bold mb-0">Anggota 1</p>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="member1" class="form-label fw-bold">Nickname</label>
                        <input type="text" class="form-control" name="" id="member1">
                        <small>Nickname ini akan digunakan sebagai profil pada dashboard</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaMember1" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="namaMember1">
                        <small>Nama Lengkap ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nim1" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" name="" id="nim1">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="universitas1" class="form-label fw-bold">Nama Universitas</label>
                        <input type="text" class="form-control" name="" id="universitas1">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nomember1" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="" id="nomember1">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoMember1" class="form-label fw-bold">Upload Foto Profil</label>
                        <input type="file" name="" id="fotoMember1" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between fotoM1">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="fotoM1" type="button">Upload</button>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan foto terbaru</li>
                                <li>Foto bebas (formal/non formal) yang rapi dan sopan</li>
                                <li>Foto diambil dari bagian kepala sampai setengah badan</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>

                    <p class="fs-5 fw-bold mb-0">Anggota 2</p>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="member2" class="form-label fw-bold">Nickname</label>
                        <input type="text" class="form-control" name="" id="member2">
                        <small>Nickname ini akan digunakan sebagai profil pada dashboard</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaMember2" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="namaMember2">
                        <small>Nama Lengkap ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nim2" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" name="" id="nim2">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="universitas2" class="form-label fw-bold">Nama Universitas</label>
                        <input type="text" class="form-control" name="" id="universitas2">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nomember2" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="" id="nomember2">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoMember2" class="form-label fw-bold">Upload Foto Profil</label>
                        <input type="file" name="" id="fotoMember2" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between fotoM2">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="fotoM2" type="button">Upload</button>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan foto terbaru</li>
                                <li>Foto bebas (formal/non formal) yang rapi dan sopan</li>
                                <li>Foto diambil dari bagian kepala sampai setengah badan</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>

                    <p class="fs-5 fw-bold mb-0">Anggota 3</p>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="member3" class="form-label fw-bold">Nickname</label>
                        <input type="text" class="form-control" name="" id="member3">
                        <small>Nickname ini akan digunakan sebagai profil pada dashboard</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaMember3" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="namaMember3">
                        <small>Nama Lengkap ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nim3" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" name="" id="nim3">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="universitas3" class="form-label fw-bold">Nama Universitas</label>
                        <input type="text" class="form-control" name="" id="universitas3">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nomember3" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="" id="nomember3">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoMember3" class="form-label fw-bold">Upload Foto Profil</label>
                        <input type="file" name="" id="fotoMember3" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between fotoM3">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="fotoM3" type="button">Upload</button>
                        <small>Keterangan Foto:
                            <ol type="1">
                                <li>Diusahakan foto terbaru</li>
                                <li>Foto bebas (formal/non formal) yang rapi dan sopan</li>
                                <li>Foto diambil dari bagian kepala sampai setengah badan</li>
                                <li>Upload file dalam bentuk (jpg/jpeg/png)).</li>
                            </ol>
                        </small>
                    </div>

                    <p class="fs-5 fw-bold mb-0">Anggota 4</p>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="member4" class="form-label fw-bold">Nickname</label>
                        <input type="text" class="form-control" name="" id="member4">
                        <small>Nickname ini akan digunakan sebagai profil pada dashboard</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="namaMember4" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" name="" id="namaMember4">
                        <small>Nama Lengkap ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nim4" class="form-label fw-bold">NIM</label>
                        <input type="text" class="form-control" name="" id="nim4">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="universitas4" class="form-label fw-bold">Nama Universitas</label>
                        <input type="text" class="form-control" name="" id="universitas4">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="nomember4" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="" id="nomember4">
                    </div>
                    <div class="mb-2 position-relative boxEdit">
                        <label for="fotoMember4" class="form-label fw-bold">Upload Foto Profil</label>
                        <input type="file" name="" id="fotoMember4" class="form-control" hidden>
                        <div class="form-control d-none justify-content-between fotoM4">
                            <i class='fs-4 bx bx-image-alt'></i>
                            <span class="fw-bold"></span>
                            <i class="fs-4 bx bx-trash" style="cursor: pointer"></i>
                        </div>
                        <button class="btn btnEdit text-white d-block" id="fotoM4" type="button">Upload</button>
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

    <script src={{ url("js/valorant.js") }}></script>

@endsection