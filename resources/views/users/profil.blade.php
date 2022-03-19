@extends("users.dashboard")

@section("content")
@if ($user->jk == null || $user->nisn == null || $user->domisili == null || $user->tmpt_lahir == null || $user->tgl_lahir == null || $user->hp == null)
    {{  route('editnnc') }}
@else
    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Profil Peserta</p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                <img src={{ $user->foto }} alt="" class="imgProfil">
                <p class="fs-6 fw-bold">Foto Profil</p>
                <div class="status d-flex mb-3">
                    <i class='fs-4 bx bx-check-circle'></i>
                    <p class="fs-6 fw-bold">
                        @if ($user->status > 0)
                            Terverifikasi
                        @else
                            Belum Terverifikasi
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-5">
                <div class="biodata p-3">
                    <table class="table table-borderless">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <th>{{ $user-nama }}</th>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>{{ $user->jk }}</th>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <th>{{ $user->nisn }}</th>
                            </tr>
                            <tr>
                                <th>Asal Sekolah</th>
                                <th>{{ $user->sekolah_id }}</th>
                            </tr>
                            <tr>
                                <th>Domisili</th>
                                <th>{{ $user->domisili }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-7">
                <div class="biodata p-3">
                    <table class="table table-borderless">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Tempat Lahir</th>
                                <th>{{ $user->tmpt_lahir }}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <th>{{ $user->tgl_lahir }}</th>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <th class="text-wrap">{{ $user->email }}</th>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <th>{{ $user->hp }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-8 d-flex flex-row-reverse mb-3">
                <a href={{ route("editnnc") }} class="btn btnEdit text-white">Edit Profil</a>
            </div>
        </div>
    </div>
@endif
@endsection
