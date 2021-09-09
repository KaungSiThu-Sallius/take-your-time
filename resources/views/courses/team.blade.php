@extends('layout.master')
@section('title')
    <title>Take Your Time - Paid Courses</title>
@endsection
@section('nav_items')
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-home fa_hid"></i>
            <span>Home</span>
            <span class="sr-only">(current)</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}"><i class="fas fa-user fa_hid"></i>About
            Us</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><i class="fas fa-graduation-cap fa_hid"></i>Scholarships</a>

        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/scholarships/undergraduate') }}">Undergraduate</a>
            <a class="dropdown-item" href="{{ url('/scholarships/master') }}">Master</a>
            <a class="dropdown-item" href="{{ url('/scholarships/phd') }}">PhD</a>
            <a class="dropdown-item" href="{{ url('/scholarships/fellowship') }}">Fellowship</a>
            <a class="dropdown-item" href="{{ url('/grants') }}">Grants</a>
            <a class="dropdown-item" href="{{ url('/scholarships/alumni') }}">Scholar Alumni</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/others/competitions') }}"><i
                class="fas fa-award fa_hid"></i>Competition</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/conferences') }}"> <i
                class="fas fa-users fa_hid"></i></i></i>Conferences</a>
    </li>

    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"> <i class="fab fa-leanpub fa_hid"></i>Courses</a>

        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/courses/freeCourses') }}">Free Courses</a>
            <a class="dropdown-item" href="{{ url('/courses/paidCourses') }}">Paid Courses</a>
            <a class="dropdown-item" href="{{ url('/courses/academicTeam') }}">Academic Team</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"> <i class="fas fa-briefcase fa_hid"></i>Jobs</a>

        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/jobs/internships') }}">Internships</a>
            <a class="dropdown-item" href="{{ url('/jobs/partTimeJobs') }}">Part-Time Jobs</a>
            <a class="dropdown-item" href="{{ url('/jobs/fullTimeJobs') }}">Full-Time Jobs</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false"><i class="fas fa-ellipsis-h fa_hid"></i>Others</a>

        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/others/seminars') }}">Seminars</a>
        </div>
    </li>

@endsection

@section('contents')
    <section>
        <div class="preview">
            <h2 class="previewText">Courses</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}" class="previewLink">Courses</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses/academicTeam') }}"
                        class="previewLink activeLink">Academic
                        Team</a></li>
            </ul>
        </div>
    </section>


    <div class="realAcademic container mt-5">
        <!-- start academic team profile section -->
        <!-- start Japanese academic team -->
        <div class="academicteam mt-5">
            <h3><span>Japanese Teacher</span></h3>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>
            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>

            </div>


        </div>
        <!-- end Japanese academic team -->
        <hr>
        <!-- start English academic team -->
        <div class="academicteam mt-5">
            <h3><span>English Teacher</span></h3>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>

            </div>
        </div>
        <!-- end English academic team -->
        <hr>
        <!-- start Korean academic team -->
        <div class="academicteam mt-5 ">
            <h3><span>Korea Teacher</span></h3>
        </div>
        <div class="row mt-3 mb-5">
            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>
            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Thae</button>
                </div>

            </div>

            <div class="col-12 col-md-3 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/team_member_2.png') }}" class="academicImg mx-auto"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail">Tr Mike</button>
                </div>

            </div>
        </div>
        <!-- end Korean academic team -->
        <!-- end academic team profile section -->
    </div>
    <div class="academic_modal">
        <div class="modal fade" id="academicProfileDetail" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/team_member.png') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr Thae</h5>

                                <span>Japanese Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>Anna graduated from Princeton and has a PhD from Columbia in English. In
                                addition,
                                she's
                                guided many students to the top college, MBA, and PhD programs in the world. She
                                uses her
                                decade of admissions experience to help students craft compelling application
                                narratives
                                that admissions committees love to read.</p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
