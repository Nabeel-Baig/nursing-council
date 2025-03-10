@extends('layouts.front-master')
@section('main-content')

    <main>
        <section class="abtHero blueDefaultBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h2 class="innerMainTitle">THE COUNCIL FUNCTIONS THROUGH SIX (6) COMMITTEES</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="content">
                            <h3 class="fw-bold">THE COUNCIL FUNCTIONS THROUGH SIX (6) COMMITTEES</h3>

                            <h4 class="fw-bold mt-4">1. Education Committee</h4>
                            <p>The Education Committee is responsible for assisting in addressing educational matters relevant to the conduct of the nursing profession.</p>
                            <ul>
                                <li>Collaborating with training institutions, review documents and examine existing actions for each initiative.</li>
                                <li>Recommend academic requirements for entry into basic and post-basic programmes.</li>
                                <li>Submit recommendations to the Council for approval and necessary action on matters pertaining to Nurse Education and Training.</li>
                                <li>Identify and develop policy/policies that may be required to strengthen or enhance works done within.</li>
                            </ul>

                            <h4 class="fw-bold mt-4">2. Examination Committee</h4>
                            <p>The Examination Committee facilitates the Registration and Enrolment examinations for nursing practice in the Commonwealth of The Bahamas.</p>
                            <ul>
                                <li>Setting and conducting examinations in various subject matters specified by the Council.</li>
                                <li>Reviewing and completing the application process for all eligible candidates that apply to write the National Nursing exam.</li>
                                <li>Making recommendation to the Council concerning date, time and venue of national exam.</li>
                                <li>Overseeing the examination process and ensure its smooth operations.</li>
                                <li>Preparing annual reports for submission.</li>
                                <li>Reviewing policy related to the examination process, as warranted.</li>
                            </ul>

                            <h4 class="fw-bold mt-4">3. Finance Committee</h4>
                            <p>The Finance Committee provides financial oversight for the Council inclusive of budgeting, financial planning, financial reporting, and the creation and monitoring of internal controls and accountability measures.</p>
                            <ul>
                                <li>Developing policies and procedures for financial activities of the Council.</li>
                                <li>Preparing, reviewing, or updating various expenditure projections.</li>
                                <li>Documenting financial transactions of the Council.</li>
                                <li>Reviewing Auditors recommendations relating to the accounting system.</li>
                                <li>Conducting immediate audit or investigation of suspected deviation from standards.</li>
                            </ul>

                            <h4 class="fw-bold mt-4">4. Registration Committee</h4>
                            <ul>
                                <li>Assessing application of registration of Nurses and Midwives trained outside of The Bahamas and recommend approval or refusal of applicants to the Council.</li>
                                <li>Assessing application for enrolment of nurses trained outside of The Bahamas and recommend approval or refusal of applicants to the Council.</li>
                                <li>Assessing application for licensing and re-licensing of Nursing Agencies and to make recommendation of approval or refusal of applicants to the Council.</li>
                                <li>Reviewing standards for the registration or enrolment of nurses.</li>
                                <li>Developing/revising policies and related forms every 5 years, or as necessary in accordance with the current Nurses and Midwives Act.</li>
                                <li>Considering any registration-related matters and refer to the Council and make recommendations regarding such matters.</li>
                            </ul>

                            <h4 class="fw-bold mt-4">5. Standards and Practice Committee</h4>
                            <ul>
                                <li>Collaborating with other Standing Committees to set and revise standards for procedures and functions of the Council.</li>
                                <li>Developing and/or revising the Standards of Nursing Practice manual(s) and tools every five (5) years, or as necessary.</li>
                                <li>Participating in the assessment/evaluation of nursing agencies and institutions seeking approval by the Council.</li>
                                <li>Participating in continuous monitoring and evaluation of nursing education, training, and standards of nursing practice.</li>
                            </ul>

                            <h4 class="fw-bold mt-4">6. Disciplinary and Penal Case Committee</h4>
                            <p>The Disciplinary and Penal Case Committee ensures protection of the public interest by establishing and maintaining a framework for addressing matters referred to The Nursing Council for investigation and disciplinary action.</p>
                            <ul>
                                <li>Investigating complaints filed regarding the conduct or action(s) of a nurse or midwife.</li>
                                <li>Providing written notice to the nurse or midwife in subject of a complaint within thirty days.</li>
                                <li>Careful consideration of the written submissions while reviewing all records and relevant documents related to the complaint.</li>
                                <li>The Disciplinary and Penal Case Committee has the power to: revoke, suspend, or impose conditions on a member’s certificate of registration, issue fines, and require members to appear before a tribunal.</li>
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
