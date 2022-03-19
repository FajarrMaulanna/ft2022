<!doctype html>
<html lang="en">
    <head>
        <title>{{ $title" }}</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- Table --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https:////cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        {{-- CSS pure --}}
        <link rel="stylesheet" href={{ url('css/dashboard.css') }}>

        @if ($title == "NNC - Profile")
            <link rel="stylesheet" href={{ url('css/profil.css') }}>
        @endif

        @if (route("dashboard") || route("users"))
            <link rel="stylesheet" href={{ url("css/superadmin.css") }}>
        @endif

        {{-- Icon --}}
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="shortcut icon" href={{ url('img/logo.png') }} type="image/x-icon">

    </head>
    <body>

        <div class="sidebar">
            <ul class="nav-list d-flex flex-column justify-content-between">
                <li class="mb-5">
                    <img src={{ url('img/logo.png') }} alt="" id="btn" class="d-flex mx-auto">
                </li>
                <div class="">
                    <li>
                        <a href={{ route("dashboard") }}>
                            <i class='bx bx-home-alt'></i>
                            <span class="links_name text-wrap">Beranda</span>
                        </a>
                        <span class="tooltip">Beranda</span>
                    </li>
                    <li>
                        <a href={{ route("users") }}>
                            <i class='bx bx-user'></i>
                            <span class="links_name text-wrap">Daftar Siswa</span>
                        </a>
                        <span class="tooltip">Daftar Siswa</span>
                    </li>
                    <li>
                        <a href={{ route("schools") }}>
                            <i class='bx bxs-bank'></i>
                            <span class="links_name text-wrap">Daftar Sekolah</span>
                        </a>
                        <span class="tooltip">Daftar Sekolah</span>
                    </li>
                    <li>
                        <a href={{ route("sm") }}>
                            <i class='bx bx-money-withdraw'></i>
                            <span class="links_name text-wrap">Daftar Sponsorship dan Media Partner</span>
                        </a>
                        <span class="tooltip">Daftar Sponsorship dan Media Partner</span>
                    </li>
                    <li>
                        <a href={{ route("events") }}>
                            <i class='bx bx-money-withdraw'></i>
                            <span class="links_name text-wrap">Daftar Event</span>
                        </a>
                        <span class="tooltip">Daftar Event</span>
                    </li>
                </div>
                <li class="mb-5">
                    <a href={{ route('adminlogout') }}>
                        <i class='bx bx-log-out'  ></i>
                        <span class="links_name text-wrap">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>

                </li>
            </ul>
        </div>
        @if ($title != "NNC - Profile")
        <div class="user position-fixed top-0 end-0 d-flex mt-4 align-items-center me-3" style="z-index: 3">
            <div class="akunUser d-flex align-items-center ms-3">
                <p class="fs-6 mb-0 me-3">{{ $user->nama??"Admin" }}</p>
            </div>
        </div>
        @endif
        <section class="home-section pt-5">
            @yield('content')
        </section>
        @yield("popup")
        <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        sidebar.addEventListener("mouseover", ()=>{
            sidebar.classList.add("open");
            menuBtnChange();//calling the function(optional)
        });

        sidebar.addEventListener("mouseout", ()=>{
            sidebar.classList.remove("open");
            menuBtnChange();//calling the function(optional)
        });

        // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        //     sidebar.classList.toggle("open");
        //     menuBtnChange(); //calling the function(optional)
        // });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
        }

        let title = document.querySelector("title"),
            as = document.querySelectorAll(".links_name text-wrap")

        switch(title.innerHTML){
            case "Beranda":
                as.forEach(a=>{
                    if(a.innerHTML === "Beranda"){
                        a.parentElement.classList.add("active")
                    }else{
                        a.parentElement.classList.remove("active")
                    }
                })
                break;
            case "Daftar Siswa":
                as.forEach(a=>{
                    if(a.innerHTML === "Daftar Siswa"){
                        a.parentElement.classList.add("active")
                    }else{
                        a.parentElement.classList.remove("active")
                    }
                })
                break;

            case "Daftar Sekolah":
                as.forEach(a=>{
                    if(a.innerHTML === "Daftar Sekolah"){
                        a.parentElement.classList.add("active")
                    }else{
                        a.parentElement.classList.remove("active")
                    }
                })
                break;

            case "Daftar Event":
                as.forEach(a=>{
                    if(a.innerHTML === "Daftar Event"){
                        a.parentElement.classList.add("active")
                    }else{
                        a.parentElement.classList.remove("active")
                    }
                })
                break;

            case "Daftar Sponsorship dan Media Partner":
                as.forEach(a=>{
                    if(a.innerHTML === "Daftar Sponsorship dan Media Partner"){
                        a.parentElement.classList.add("active")
                    }else{
                        a.parentElement.classList.remove("active")
                    }
                })
                break;
        }
        </script>


        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
