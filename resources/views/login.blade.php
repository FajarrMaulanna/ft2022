@extends("layouts.landingpage")

@section("title", "Login")

@section("content")

    <div class="position-absolute top-0 bottom-0 w-100 redBlue overflow-hidden"></div>

    <div class="container-fluid mt-5 pt-3 login">
        <div class="row mt-5">
            <div class="col-6">
            </div>
            <div class="col-6 p-0">
                <p class="fs-2 fw-bold">Masuk</p>
                {{-- Open Alert --}}
                <div class="alert alert-danger alert-dismissible fade d-none" role="alert" style="max-width: 420px;" id="danger">
                    Kamu harus pilih event yang ingin diikuti
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                {{-- Close Alert --}}
                <form action="login" method="post" class="position-relative overflow-hidden ps-1 formLogin" style="max-width: 420px; width: 100%; height: 400px">
                    @csrf
                    <div class="position-absolute boxLogin">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Event</label>
                            <select class="form-select inputLogin" name="event" id="event">
                                <option selected>Event</option>
                                @foreach ($events as $event)
                                    <option value="{{ $event->nama }}">{{ $event->nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Pilih event yang diikuti</small>
                        </div>
                        <div class="mb-3 d-none" id="role">
                            <label for="" class="form-label fw-bold">Sebagai: </label>
                            <select class="form-select inputLogin" name="sebagai" id="">
                                <option selected>Sebagai:</option>
                                <option value="peserta">Peserta</option>
                                <option value="sekolah">Sekolah</option>
                            </select>
                            <small class="form-text text-muted">Pilih masuk sebagai peserta atau sekolah</small>
                        </div>

                        <div class="d-flex align-items-center flex-row-reverse">
                            <button type="button" class="btn d-flex align-items-center fs-5 btnLogin text-white" id="next">Selanjutnya <i class='bx bx-right-arrow-alt fs-3'></i></button>
                        </div>
                    </div>
                    <div class="position-absolute boxLogin" style= "right: -400px;">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control inputLogin" name="username" id="username" aria-describedby="helpId" placeholder="Username">
                            <small class="form-text text-muted">Username ini digunakan sebagai identitas akun Anda, Minimal 8 Karakter</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Password</label>
                            <div class="password position-relative">
                                <input type="password" class="form-control inputLogin" name="password" aria-describedby="helpId" placeholder="Password">
                            </div>
                            <small class="form-text text-muted">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                        </div>
                        <div class="d-flex align-items-center flex-row-reverse">
                            <button type="submit" class="btn d-flex align-items-center fs-5 btnLogin text-white">Login</button>
                        </div>
                    </div>
                </form>
                <div class="footerLogin">
                    <p>Belum mempunyai akun? <a href={{ route("register") }} class="text-decoration-none">Daftar sekarang</a></p>
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
        let boxLogin = document.querySelectorAll('.boxLogin'),
            next = document.getElementById("next"),
            formLogin = document.querySelector(".formLogin"),
            redBlue = document.querySelector(".redBlue"),
            danger = document.getElementById("danger")

        next.onclick = () => {
            if(even.value == "Event"){
                danger.classList.replace("d-none", "show")
            }else{
                boxLogin[0].style.left = "-410px"
                boxLogin[1].style.right= "0px"
                formLogin.style.height= "600px";
                redBlue.classList.remove("overflow-hidden")
            }
        }

        let even = document.getElementById("event"),
            role = document.getElementById("role")

        even.onclick = () =>{
            if(even.value === "National Network Competition"){
                role.classList.remove("d-none")
            }else{
                role.classList.add("d-none")
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
