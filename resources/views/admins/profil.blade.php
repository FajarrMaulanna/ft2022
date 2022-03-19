@extends("admins.dashboard")

@section("content")
{{-- @if ($user->logo == null || $user->alamat == null || $user->telepon == null || $user->jabatan_pj == null || $user->nip_pj == null || $user->hp_pj == null) --}}
    {{-- {{ route('editschool') }} --}}
{{-- @else --}}
    <div class="container-fluid">
        <div class="title">
            <p class="fs-3 fw-bold">Profil Sekolah</p>
        </div>
        <div class="row align-items-center">
            <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                @if ($user->logo)
                    <img src={{ asset('storage/' . $user->logo) }} alt="foto" class="imgProfil">
                @else    
                    <img src={{ url("img/logo.png") }} alt="foto" class="imgProfil">
                @endif
                <p class="fs-6 fw-bold">Foto Profil</p>
                {{-- <div class="status d-flex mb-3">
                    <i class='fs-4 bx bx-check-circle'></i>
                    <p class="fs-6 fw-bold">Terverifikasi</p>
                </div> --}}
            </div>
            <div class="col-7">
                <div class="biodata p-3">
                    <table class="table table-borderless">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Nama Sekolah</th>
                                <th>{{ $user->nama }}</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>{{ $user->alamat }}</th>
                            </tr>
                            <tr>
                                <th>Jumlah Peserta</th>
                                {{-- <th>{{ $user->networks->count() }}</th> --}}
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <th>{{ $user->email }}</th>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <th>{{ $user->telepon }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="title mt-3">
            <p class="fs-4 fw-bold">Identitas Penanggung Jawab</p>
        </div>
        <div class="row mt-4">
            <div class="col-7">
                <div class="biodata p-3">
                    <table class="table table-borderless">
                        <thead></thead>
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <th>{{ $user->pj }}</th>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <th>{{ $user->jabatan_pj }}</th>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <th class="text-wrap">{{ $user->nip_pj }}</th>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <th>{{ $user->hp_pj }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-10 d-flex flex-row-reverse mb-3">
                <a href={{ route("editschool", $user->id) }} class="btn btnEdit text-white">Edit Profil</a>
            </div>
        </div>
    </div>
{{-- @endif --}}
@endsection
