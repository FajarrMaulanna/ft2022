@extends("admins.dashboard")

@section("content")

    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Daftar Siswa</p>
        </div>
        <div class="row">
            <div class="menuEvent">
                <a href="" class="aktiv">National Network Competition</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-responsive table-hover dataSiswa m-0 w-100" id="table_id">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor Telepon</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                        <tr>
                            <td>
                                <div class="namaSiswa">
                                    <img src={{ url("img/nnc/
                                    @if ($siswa->foto == null)
                                    user.png
                                    @else
                                    {{ $siswa->foto }}
                                    @endif
                                    ") }} alt="" class="imgTable">
                                    <p class="fs-6 mb-0">{{ $siswa->nama }}</p>
                                </div>
                            </td>
                            <td><p class="fs-6 mb-0">{{ $siswa->nisn }}</p></td>
                            <td><p class="fs-6 mb-0">{{ $siswa->jk }}</p></td>
                            <td><p class="fs-6 mb-0">{{ $siswa->hp }}</p></td>
                            <td>
                                @if ($siswa->pembayaran == null)

                                @else
                                <p class="fs-6 mb-0">{{ $siswa->pembayaran }}</p>
                                @endif
                            </td>
                            <td><div class="bp">Terverifikasi</div></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>
                                <div class="namaSiswa">
                                    <img src={{ url("img/logo.png") }} alt="" class="imgTable">
                                    <p class="fs-6 mb-0">Alena Press</p>
                                </div>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">10294712785</p>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">Perempuan</p>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">+62 812-9812-8943</p>
                            </td>
                            <td>
                                <div class="bp">Telah Diupload</div>
                            </td>
                            <td>
                                <div class="bpp">Belum Terverifikasi</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="namaSiswa">
                                    <img src={{ url("img/logo.png") }} alt="" class="imgTable">
                                    <p class="fs-6 mb-0">Alena Press</p>
                                </div>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">10294712785</p>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">Perempuan</p>
                            </td>
                            <td>
                                <p class="fs-6 mb-0">+62 812-9812-8943</p>
                            </td>
                            <td>
                                <button class="btn btnEdit"
                                    onclick="
                                        document.getElementById('bp').click()
                                        document.getElementById('bp').addEventListener('change', function(){
                                            document.getElementById('upload').click()
                                        })
                                ">Upload</button>
                                <form action="">
                                    <input type="file" name="" id="bp" class="form-control" hidden>
                                    <button type="submit" class="btn btnEdit" id="upload" hidden>Submit</button>
                                </form>
                            </td>
                            <td>
                                <div class="bpp">Belum Terverifikasi</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>

        $(document).ready( function(){
            $("#table_id").DataTable()
        })

        let upload = document.getElementById("upload"),
            bp = document.getElementById("bp")

        if(bp.value != ""){
            upload.click()
        }
    </script>

@endsection
