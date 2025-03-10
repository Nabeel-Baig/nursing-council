<div class="topMenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 topMenuInner">
                <div class="row topinnerRow">
                    <div class="col-lg-8 col-md-12 col-sm-12 text-end">
                        <ul class="topMenuList">
                            <li class="contact-hover">
                                <a href="javascript:void(0)">Contact Us</a>
                                <div class="contact-details">
                                    <a href="tel:2426046015">📞 (242)6046015</a>
                                    <a href="mailto:info@nursingcouncilbahamas.com">✉️
                                        info@nursingcouncilbahamas.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <ul class="socialIconList">
                            <li><a href="{{ $frontSetting->fb_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="{{ $frontSetting->twitter_link }}" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $frontSetting->youtube_link }}" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li><a href="{{ $frontSetting->insta_link }}" target="_blank"><i
                                        class="fab Search the register Confirm a nurse,fa-instagram"></i></a></li>
                        </ul>
                        <div class="searchIcon">
                            <img src="{{ asset("front_assets/images/icons/search.png") }}" alt="Search" title="Search">
                            <a class="p-1" href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <!--<img src="{{ asset("front_assets/nursing-council.png") }}" alt="The Nursing Council" title="The Nursing Council">-->
            <img src="{{ asset("front_assets/nursing_new127.png") }}" alt="The Nursing Council"
                 title="The Nursing Council">
            {{-- <img src="{{ asset($frontSetting->logo) }}" alt="The Nursing Council" title="The Nursing Council"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Home
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('history') }}">History</a></li>
                        <li><a class="dropdown-item" href="{{ url('council') }}">The Council Today</a></li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Who We Are</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('what-we-do') }}">Vision/Mission</a></li>
                                <li><a class="dropdown-item" href="{{ url('what-we-do') }}">Mandate</a></li>
                                <li><a class="dropdown-item" href="{{ url('what-we-do') }}">Core Values</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about-us.php" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        About us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('what-we-do') }}">What we do</a></li>
                        <li><a class="dropdown-item" href="{{ url('who-we-work-with') }}">Code of Ethics</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Standards
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ url('the-code') }}">The Code</a></li>
                    <li><a class="dropdown-item" href="{{ url('revalidation') }}">Revalidation</a></li>
                    <li><a class="dropdown-item" href="{{ url('standards-for-nurses') }}">Standards for nurses</a></li>
                    <li><a class="dropdown-item" href="{{ url('standards-for-midwives') }}">Standards for midwives</a></li>
                    <li><a class="dropdown-item" href="{{ url('standards-for-nursing-associates') }}">Standards for nursing associates</a></li>
                    <li><a class="dropdown-item" href="{{ url('contacts-of-education-institutions') }}">Contacts of education institutions</a></li>
                  </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Education
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('our-role-in-education') }}">Our role in education</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ url('becoming-a-nurse-midwife-nursing-associate') }}">Becoming
                                a nurse, midwife or nursing associate</a></li>
                        <!--<li><a class="dropdown-item" href="{{ url('approved-programmes') }}">Approved programmes</a></li>-->
                        <li><a class="dropdown-item" href="{{ url('contacts-of-education-institutions') }}">Contacts of
                                Education Institutions</a></li>
                        <li><a class="dropdown-item" href="{{ url('registration-forms') }}">Registration Forms</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Concerns
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                  </ul>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Registration
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                    <li><a class="dropdown-item" href="#">Submenu</a></li>
                  </ul>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('news-and-updates') }}">News and Updates</a></li>
                        <li><a class="dropdown-item" href="{{ url('events') }}">Events</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 headerAbout">
                <li class="nav-item">
                    <div class="iconCard d-flex">
                        <div class="icon">
                            <img src="{{ asset("front_assets/images/icons/register.png") }}" alt="">
                        </div>
                        <div class="detail">
                            <span>Search The Register</span>
                            <p>Confirm a nurse, midwife or nursing associate’s registration</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
