@extends("layouts.dashboard")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <p class="fs-3 fw-bold">Daftar Event</p>
                </div>
            </div>
        </div>
        <div class="row mt-3 rowData">
            <table class="table table-responsive tbData" id="table_id" style="z-index: 2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Event</th>
                        <th>Url</th>
                        <th>Foto</th>
                        <th>Cakupan</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Panduan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $event->nama }}</td>
                        <td>{{ $event->slug }}</td>
                        <td>{{ $event->foto }}</td>
                        <td>{{ $event->cakupan }}</td>
                        <td>{{ $event->kategori }}</td>
                        <td>{{ $event->deskripsi }}</td>
                        <td>{{ $event->panduan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="btn btnTambah" id="openSp">Tambah <i class="bx bx-plus"></i></button> {{-- Sponsor --}}
    </div>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

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
                    <p class="fs-3 fw-bold">Tambah Event</p>
                    <i class="fs-1 fw-bold bx bx-x" id="closeSp"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="" style="height: 500px" class="overflow-auto"> 
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Event</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Nama ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Nama Url</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Url ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Cakupan</label>
                        <select class="form-control" name="" id="">
                            <option selected>Cakupan</option>
                            <option value="National">National</option>
                            <option value="Sumatera Barat, Riau, Jambi">Sumatera Barat, Riau, Jambi</option>
                        </select>
                        <small class="form-text text-muted">Cakupan ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Kategori</label>
                        <select class="form-control" name="" id="">
                            <option selected>Kategori</option>
                            <option value="umum">Umum</option>
                            <option value="sma/smk">SMA/SMK</option>
                        </select>
                        <small class="form-text text-muted">Kategori ini akan tampil pada data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Deskripsi</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Deskripsi ini akan tampil pada laman beranda, tentang kami, dan data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Panduan</label>
                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Panduan ini akan tampil pada laman beranda, tentang kami, dan data admin</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bold">Foto</label>
                        <input type="file" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        <small class="form-text text-muted">Foto ini akan tampil pada laman beranda, tentang kami, dan data admin</small>
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

        trash.onclick = () =>{
            sponsor.classList.replace("d-none", "d-block")
            spFoto.parentElement.classList.replace("d-flex", "d-none")
        }
</script>

@endsection