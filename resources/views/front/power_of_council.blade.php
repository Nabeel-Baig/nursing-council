@extends('layouts.front-master')
@section('main-content')

    <main>
        <section class="abtHero blueDefaultBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2 class="innerMainTitle">History</h2>
                        <h4 class="text-white">
                            POWER OF THE COUNCIL IN ACCORDANCE WITH THE NURSES AND MIDWIVES ACT
                            1971
                        </h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="content">
                            <h3 class="fw-bold">Power of the Council</h3>
                            <p>The Council seeks to ensure the protection of the public by supporting the development
                                and utilization of well-trained nurses.</p>
                            <h5 class="fw-bold mt-4">Additional Functions of the Council:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Prescribe entry requirements for nurse training programs.
                                </li>
                                <li class="list-group-item">Regulate the role and function of its members.</li>
                                <li class="list-group-item">Establish, maintain, and develop standards of knowledge,
                                    skills, and professional ethics.
                                </li>
                                <li class="list-group-item">Set practice examinations for enrollment and registration.
                                </li>
                                <li class="list-group-item">Set operational fees for examination, registration, and
                                    licensure.
                                </li>
                                <li class="list-group-item">Investigate complaints regarding nurses and nursing
                                    practice.
                                </li>
                                <li class="list-group-item">Validate enrollment and registration of nurses.</li>
                                <li class="list-group-item">Control the education, training, and practice of nurses and
                                    midwives.
                                </li>
                                <li class="list-group-item">Discipline of Nurses and Midwives.</li>
                                <li class="list-group-item">Remove nurses' names from the roll and register.</li>
                                <li class="list-group-item">Reinstate nurses' names to the roll and register.</li>
                                <li class="list-group-item">Regulate nurses' agencies under the Nurses and Midwives Act
                                    1971 (Nurses Agency Regulations 1993).
                                </li>
                            </ul>
                            <h5 class="fw-bold mt-4">Financial</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">The Council receives a subvention from the government
                                    through the Ministry of Health and Wellness.
                                </li>
                                <li class="list-group-item">The Council’s funds consist of monies lawfully paid for
                                    services provided.
                                </li>
                                <li class="list-group-item">The annual report of the Nursing Council is submitted in
                                    March for the previous calendar year.
                                </li>
                                <li class="list-group-item">The Council is audited by an independent auditor annually.
                                </li>
                            </ul>
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
