@extends('layouts.front-master')
@section('main-content')

    <main>
        <section class="abtHero blueDefaultBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2 class="innerMainTitle">History</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="content">
                            <h3 class="fw-bold">History</h3>
                            <p>In May 1971, with the repeal of the Midwives ordinances of 1936, the Nurses and Midwives Act 1971, was passed. This enactment was the statutory instrument needed to regulate the education and practice of Nurses and Midwives in The Commonwealth of The Bahamas.</p>
                            <p>The Nursing Council was established in January of 1972 by the Minister of Health with a mandate to protect the public by supervising nurses practising within the country. All practising nurses and midwives were obligated to register with the Council or be liable for prosecution. Likewise, all practising trained clinical nurses were statutorily obligated to enroll. The Education and training of nurses in all aspects were placed under the control of the Council, and all students entering a nurse education programme were required to be indexed.</p>
                            <p>The Council was dually tasked with enforcing disciplinary action in cases of misconduct or conviction with the power to strike a nurse from the register. After consultation with the Minister, the Council can establish and implement policies, develop codes of conduct and set standards pertaining to the profession. The first regulations formulated by the Council in 1972 were approved by the Minister of Health and passed as law in the House of Parliament. This process of gaining approval remains the same to date.</p>

                            <h4 class="fw-bold mt-4">Founding Members</h4>
                            <ul>
                                <li>Ms. Hilda Bowen, Chairperson</li>
                                <li>Mrs. Ironaca Morris, Secretary elect</li>
                                <li>Mrs. Dorothy Philips, Treasurer elect</li>
                                <li>Mrs. Ophelia Munnings</li>
                                <li>Mrs. Brendel Cox</li>
                                <li>Mr. T.G.Glover</li>
                                <li>Dr. Kirkland Culmer</li>
                                <li>Mrs. Eloise Penn</li>
                                <li>Ms. Sylvia Davis</li>
                                <li>Mrs. Ruby Nottage</li>
                                <li>*Mrs. Beverly Ford, Registrar</li>
                            </ul>
                            <img src="{{ asset('assets/images/history/nursing_council_org_chart.png')  }}" alt="">
                            <h4 class="fw-bold mt-4">Bird’s Eye View of Nurses: Footprint by Hilda V. Bowen M.B.E.</h4>
                            <p>The basis to which the Council was created remains the reason for its operation to date. It remains invested in protecting citizens and all who require healthcare services within the country.</p>
                            <p>In 1971, Student Nurse Dorothy Hepburn nee Morris designed a proposed seal for the Council which was approved by the late Honorable Minister of Health, Mr. Loftus Roker. The work of Mrs. Hepburn nee Morris continues to be seen on all official documents released by the Council. Registration certificates signed by the Chairman and the Registrar are sealed with this seal that depicts two hands holding a conch shell topped by a flame. According to its originator, the hands represent healing hands and compassionate care, the conch shell represents The Bahamas as a country, and the flame signifies Florence Nightingale.</p>
                            <p>The picture below is the presentation of the seal to the first Chairman of the Council, Ms. Hilda Bowen.</p>
                            <img src="{{ asset('assets/images/history/nursing_council_org_chart.png')  }}" alt="">
                            <img src="{{ asset('assets/images/history/logo_sketch.png')  }}" alt="">
                            <p>The Nursing Council pin has the image of the seal incorporated in it.</p>
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
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
