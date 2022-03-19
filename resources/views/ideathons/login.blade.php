@extends("layouts.landingpage")

@section("content")

    <div class="position-absolute top-0 bottom-0 w-100 redBlue overflow-hidden"></div>

    <div class="container-fluid mt-5 pt-3 login">
        <div class="row mt-5">
            <div class="col-6">

            </div>
            <div class="col-6 p-0">
                <p class="fs-2 fw-bold">Masuk</p>
                <form action="" method="" class="position-relative overflow-hidden ps-1" style="height: 400px; max-width: 420px; width: 100%;">
                    <div class="position-absolute boxLogin">
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control inputLogin" name="" id="username" aria-describedby="helpId" placeholder="Username">
                            <small class="form-text text-muted">Username ini digunakan sebagai identitas akun Anda</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Password</label>
                            <div class="password position-relative">
                                <input type="password" class="form-control inputLogin" name="" aria-describedby="helpId" placeholder="Password">
                            </div>
                            <small class="form-text text-muted">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                        </div>
                        <div class="d-flex align-items-center flex-row-reverse">
                            <button type="submit" class="btn d-flex align-items-center fs-5 btnLogin text-white">Masuk</button>
                        </div>
                    </div>
                </form>
                <div class="footerLogin d-flex flex-column-reverse">
                    <p>Belum mempunyai akun? <a href={{ route("ideathon/register") }} class="text-decoration-none">Daftar sekarang</a></p>
                    {{-- <div class="d-flex align-items-center">
                        <p class="mb-0 me-3">Atau masuk menggunakan</p>
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
                }else if(a == "<i class='bx bx-show'></i>"){
                    a = "<i class='bx bx-hide'></i>"
                    password.querySelector("input").type = "text"
                }
                eye.innerHTML = a
            }
            password.appendChild(eye)
        })

    </script>
@endsection
