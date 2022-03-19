@extends("layouts.landingpage")

@section("title", $title)

@section("content")

    <div class="position-absolute top-0 bottom-0 w-100 redBlue overflow-hidden"></div>
    <div class="container-fluid mt-5 pt-3 login">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <p class="fs-2 fw-bold text-center">Daftar Akun Baru</p>
                <div class="d-flex justify-content-evenly flex-wrap">
                    @foreach ($events as $event)
                    <div class="event mb-3">
                        <a href="register/{{ $event->slug }}" class="btn fw-bold">{{ $event->nama }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
