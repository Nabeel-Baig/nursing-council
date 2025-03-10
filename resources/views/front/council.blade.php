@extends('layouts.front-master')
@section('main-content')

    <main>
        <section class="abtHero blueDefaultBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2 class="innerMainTitle">The Council Today</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="content">
                            <h3 class="fw-bold">The Council Today</h3>
                            <p>The Nursing Council of The Commonwealth of The Bahamas continues to be a
                                statutory organization that regulates Nursing and Midwifery education, practice,
                                registration and licensure. The Council functions in accordance with the Nurses
                                and Midwives Act of 1971 and the Nurses and Midwives (Nurses Agencies)
                                Regulations, 1993.</p>
                            <p>The 1971 Act has been repealed with the Nurses and Midwives Act of 2023. Although already tabled in Cabinet, it awaits to be brought
                                into ‘force’ by the Minister of Health and Wellness. Until all components have
                                been brought into full effect, the Nursing Council continues to be guided by the
                                Act of 1971.</p>
                            <h5 class="fw-bold mt-4">The Council consists of 10 appointed members:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">5 persons whom the Minister selects.</li>
                                <li class="list-group-item">3 persons nominated by the Nurses’ Association.</li>
                                <li class="list-group-item">1 person nominated by the Minister of Education.</li>
                                <li class="list-group-item">1 registered medical practitioner selected by the Minister in association with the Medical Association.</li>
                            </ul>
                            <p class="mt-4">Appointments are granted for a period of one to two years, after which each
                                member is eligible to be reappointed. The Minister is responsible for appointing a
                                Chairman and a Deputy Chairman from among the selected members.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.front-components.iwant')


        <div class="modal fade aboutVideo" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.youtube.com/embed/gXaZ2U_BuoE" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
