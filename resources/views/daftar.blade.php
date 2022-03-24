@extends("layouts.landingpage")

@section("title", $title)

@section("content")

    <div class="position-absolute top-0 bottom-0 w-100 redBlue overflow-hidden"></div>
    <div class="container-fluid mt-5 pt-3 login">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
                <p class="fs-2 fw-bold text-center">Event Firetech 2022</p>
                <div class="d-flex justify-content-evenly">
<!--
                    @foreach ($events as $event)
                    <div class="event mb-3">
                        <a href="register/{{ $event->slug }}" class="btn fw-bold">{{ $event->nama }}</a>
                    </div>
                    @endforeach
-->   
                    <a href="http://unand.net/NNCFiretech2022" class="btn fw-bold">
                        <div class="event mb-3">
                            National Network Competition
                        </div>
                    </a>
                    <a href="http://unand.net/ideathonFiretech2022" class="btn fw-bold">
                        <div class="event mb-3">
                            Ideathon
                        </div>
                    </a>
                    <a href="http://unand.net/ValorantFiretech2022" class="btn fw-bold">
                        <div class="event mb-3">
                            E-Sport : Valorant Tournament
                        </div>
                    </a>
                    <a href="/comingsoon" class="btn fw-bold">
                        <div class="event mb-3">
                            Webinar Career
                        </div>
                    </a>
                    <a href="/comingsoon" class="btn fw-bold">
                        <div class="event mb-3">
                            Workshop UI/UX
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
