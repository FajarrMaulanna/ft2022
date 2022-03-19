@extends("layouts.landingpage")

@section("title", $title)

@section("content")

    <div class="position-absolute top-0 bottom-0 w-100 redBlue overflow-hidden"></div>

    <div class="container-fluid mt-5 pt-3 login">
        <div class="row mt-5">
            <div class="col-6">
            </div>
            <div class="col-6 p-0">
                <p class="fs-2 fw-bold">Daftar Akun Baru</p>
                <form action="nnc" method="post" class="position-relative overflow-hidden ps-1 formLogin" style="max-width: 400px; width: 100%; height: 400px">
                    @csrf
                    <div class="position-absolute boxLogin" id="sebagaiLogin" style="left: 0px">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Sebagai: </label>
                            <select class="form-select inputLogin" name="sebagai" id="sebagai">
                                <option selected>Sebagai:</option>
                                <option value="peserta">Peserta</option>
                                <option value="sekolah">Sekolah</option>
                            </select>
                            <small class="form-text text-muted">Pilih mendaftar sebagai peserta atau sekolah</small>
                        </div>

                        <div class="d-flex align-items-center flex-row-reverse">
                            <button type="button" class="btn d-flex align-items-center fs-5 btnLogin text-white" id="next-1">Selanjutnya <i class='bx bx-right-arrow-alt fs-3'></i></button>
                        </div>
                    </div>
                    {{-- Peserta --}}
                    <div class="peserta">
                        <div class="position-absolute boxLogin" style= "left: 400px;">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control inputLogin" name="nama" placeholder="Nama Lengkap">
                                <small class="form-text text-muted">Nama ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Username</label>
                                <input type="text" class="form-control inputLogin" name="username" placeholder="Username">
                                <small class="form-text text-muted">Username ini digunakan sebagai identitas akun Anda, Minimal 8 karakter</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control inputLogin" name="email" placeholder="Email">
                                <small class="form-text text-muted">Masukkan alamat email aktif Anda</small>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse">
                                <button type="button" class="btn d-flex align-items-center fs-5 btnLogin text-white" id="next-2">Selanjutnya <i class='bx bx-right-arrow-alt fs-3'></i></button>
                            </div>
                        </div>
                        <div class="position-absolute boxLogin" style= "left: 400px;">
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Sekolah: </label>
                                <select class="form-select inputLogin" name="id_sekolah" id="">
                                    <option selected>Sekolah</option>
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->id }}">{{ $school->nama }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">Pilih Sekolah Anda, Jika Sekolah Anda belum ada silahkan daftarkan sekolah anda dulu.</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Password</label>
                                <div class="password position-relative">
                                    <input type="password" class="form-control inputLogin" name="password" placeholder="Password">
                                </div>
                                <small class="form-text text-muted">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Konfirmasi Password</label>
                                <div class="password position-relative">
                                    <input type="password" class="form-control inputLogin" name="password2" placeholder="Konfirmasi Password">
                                </div>
                                <small class="form-text text-muted">Ulangi password di atas</small>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse">
                                <button type="submit" class="btn d-flex align-items-center fs-5 btnLogin text-white">Daftar</button>
                            </div>
                        </div>
                    </div>
                    {{-- Sekolah --}}
                    <div class="sekolah">
                        <div class="position-absolute boxLogin" style= "left: 400px;">
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Sekolah</label>
                                <input type="text" class="form-control inputLogin" name="nama" placeholder="Nama Lengkap">
                                <small class="form-text text-muted">Nama ini akan digunakan sebagai profil, data sertifikat, dan lainnya</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Username</label>
                                <input type="text" class="form-control inputLogin" name="username" placeholder="Username">
                                <small class="form-text text-muted">Username ini digunakan sebagai identitas akun Anda, Minimal 8 Karakter</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control inputLogin" name="email" placeholder="Email">
                                <small class="form-text text-muted">Masukkan alamat email aktif Anda</small>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse">
                                <button type="button" class="btn d-flex align-items-center fs-5 btnLogin text-white" id="next-3">Selanjutnya <i class='bx bx-right-arrow-alt fs-3'></i></button>
                            </div>
                        </div>
                        <div class="position-absolute boxLogin" style= "left: 400px;">
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Penanggung Jawab</label>
                                <input type="text" class="form-control inputLogin" name="pj" placeholder="Penanggung Jawab">
                                <small class="form-text text-muted">Penanggung Jawab ini digunakan sebagai identitas akun Anda</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Password</label>
                                <div class="password position-relative">
                                    <input type="password" class="form-control inputLogin" name="password" placeholder="Password">
                                </div>
                                <small class="form-text text-muted">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Konfirmasi Password</label>
                                <div class="password position-relative">
                                    <input type="password" class="form-control inputLogin" name="password2" placeholder="Konfirmasi Password">
                                </div>
                                <small class="form-text text-muted">Ulangi password di atas</small>
                            </div>
                            <div class="d-flex align-items-center flex-row-reverse">
                                <button type="submit" class="btn d-flex align-items-center fs-5 btnLogin text-white">Daftar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="footerLogin">
                    <p>Sudah mempunyai akun? <a href={{ route("login") }} class="text-decoration-none">Masuk sekarang</a></p>
                    {{-- <div class="d-flex align-items-center">
                        <p class="mb-0 me-3">Atau daftar menggunakan</p>
                        <div class="button">
                            <a href="" class="btn border-info"><img src={{ url('img/google.png') }} alt=""></a>
                            <a href="" class="btn border-info">Facebook</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        let sebagai = document.querySelector("#sebagai"),
            peserta = document.querySelector(".peserta"),
            pesertaLogins = document.querySelectorAll(".peserta .boxLogin"),
            sekolah = document.querySelector(".sekolah"),
            sekolahLogins = document.querySelectorAll(".sekolah .boxLogin"),
            boxLogin = document.getElementById("sebagaiLogin"),
            next_1 = document.getElementById("next-1"),
            next_2 = document.getElementById("next-2"),
            next_3 = document.getElementById("next-3")

        sebagai.onclick = () =>{
            if(sebagai.value == "peserta"){
                next_1.onclick = () =>{
                    peserta.classList.remove("d-none")
                    sekolah.classList.add("d-none")

                    boxLogin.style.left = "-430px"
                    pesertaLogins[0].style.left = "0px"
                }
                next_2.onclick = () =>{
                    pesertaLogins[0].style.left = "-430px"
                    pesertaLogins[1].style.left = "0px"
                }
            }else if(sebagai.value == "sekolah"){
                next_1.onclick = () =>{
                    sekolah.classList.remove("d-none")
                    peserta.classList.add("d-none")

                    boxLogin.style.left = "-430px"
                    sekolahLogins[0].style.left = "0px"
                }
                next_3.onclick = () =>{
                    sekolahLogins[0].style.left = "-430px"
                    sekolahLogins[1].style.left = "0px"
                }
            }
        }

        let passwords = document.querySelectorAll('.password'),
            a = "<i class='bx bx-show'></i>"
        passwords.forEach(password=>{
            let eye = document.createElement("SPAN")
            eye.classList.add("fs-4", "eyes", "position-absolute")
            eye.innerHTML = a
            eye.onclick = () =>{
                if(a == "<i class='bx bx-hide'></i>" ){
                    a = "<i class='bx bx-show'></i>"
                    password.querySelector("input").type = "password"
                }
                else if(a == "<i class='bx bx-show'></i>"){
                    a = "<i class='bx bx-hide'></i>"
                    password.querySelector("input").type = "text"
                }
            }
            eye.innerHTML = a
            password.appendChild(eye)
        })

    </script>
@endsection
