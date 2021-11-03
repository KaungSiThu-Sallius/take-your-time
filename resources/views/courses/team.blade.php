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
        <a class="nav-link" href="{{ url('/competitions') }}"><i class="fas fa-award fa_hid"></i>Competition</a>
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
            <a class="dropdown-item" href="{{ url('/courses/academicTeam') }}">Academic Members</a>
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


    <div class="realAcademic container mt-5 mb-5">
        <!-- start academic team profile section -->
        <div class="academicteam mt-5">
            <h3><span>English Teacher</span></h3>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Mike.jpeg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E01">Tr. Mike</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h3 class="name card-title">Tr. Mike</h3>
                            <h4 class="class">General English, IELTS Trainer</h4>
                            <h5 class="role">Advisor of Take Your Time</h5>
                            <h5 class="te mt-2">TE: Over 20 years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/TrBill.jpeg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E02">Tr. Bill</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name">Tr. Bill</h4>
                            <h4 class="class">Business English</h4>
                            <h5 class="te mt-2">TE: Over 15 years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Tr.Pieter.jpg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E03">Tr. Pieter</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name">Tr. Pieter</h4>
                            <h4 class="class">English for kids</h4>
                            <h5 class="te mt-2">TE: Over - years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Tr paul.jpeg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E04">Tr. Paul</button>

                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Tr mary.jpeg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E05">Tr. Mary</button>

                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Moe Myint Zu.jpg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_E06">Tr. Myint Zu</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name">Tr. Moe Myint Zu</h4>
                            <h4 class="class">English</h4>
                            <h5 class="te mt-2">TE: Over - years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
        <!-- end english academic team -->
        <hr>
        <!-- start language academic team -->
        <div class="academicteam mt-5">
            <h3><span>Languages Teacher</span></h3>
        </div>
        <div class="row mt-3 text-center">
            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/zayyar.jpg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_L01">Tr. Zay Yar</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name card-title">Tr. Zay Yar</h4>
                            <h4 class="class">Thai</h4>
                            <h5 class="te mt-2">TE: Over - years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Cheong.jpg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_L02">Tr. Cheong Ha</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name card-title">Tr Cheong</h4>
                            <h4 class="class">Korea</h4>
                            <h5 class="te mt-2">TE: Over - years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Tr.Khin Saung Hnin.jpg') }}" class="academicImg"
                        alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_L03">Tr. Saung Hnin</button>
                    {{-- <div class="card">
                        <div class="card-body">
                            <h4 class="name khin card-title">Tr. Khin Saung Hnin</h4>
                            <h4 class="class">Chinese</h4>
                            <h5 class="te mt-2">TE: Over - years</h5>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-12 col-lg-3 col-md-6 my-3">
                <div class="academicProfile d-flex justify-content-center flex-column">
                    <img src="{{ asset('images/Tr Gen.jpeg') }}" class="academicImg" alt="academicprofile" />
                    <button type="button" class="btn button academicBtn mt-4 mx-auto" data-toggle="modal"
                        data-target="#academicProfileDetail_L04">Tr. Gen</button>

                </div>
            </div>

        </div>

        <!-- end academic team profile section -->
    </div>
    <div class="academic_modal">
        <div class="modal fade" id="academicProfileDetail_E01" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Mike.jpeg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Mike (British)
                                </h5>

                                <span>General English and IELTS Teacher | Advisor of Take Your Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>MA (Hons) in Economics University of St. Andrews</li>
                                <li>Teaching in Myanmar over 15 Years</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="academicProfileDetail_E02" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/TrBill.jpeg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Bill (American)</h5>

                                <span>Business English Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>Education: BA - History - University of Wisconsin Madison</li>
                                <li>MA - Strategic Intelligence specializing in Terrorism – American Military University
                                </li>
                                <li>TEFL - The LADO Institute </li>
                                <li>Work Experience: Service Manager (Head Teacher) - Wall Street Institute LadPrao </li>
                                <li>Teaching Experience: Over 15 years</li>

                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="academicProfileDetail_E03" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Tr.Pieter.jpg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Pieter (Belgium)</h5>

                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>Master of Applied Economics (TEW); KU Leuven</li>
                                <li>English Teacher Somappattana School Thailand </li>
                                <li>Teaching Experience: over 4 Years</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="academicProfileDetail_E04" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Tr paul.jpeg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Paul (British)</h5>

                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>TEFL Certify Teacher</li>
                                <li>Teaching Experience: over 11 Years</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="academicProfileDetail_E05" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Tr mary.jpeg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Mary</h5>

                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>B.Ed</li>
                                <li>M.Ed</li>
                                <li>Master of Development Major</li>
                                <li>University of Melbourne, Australia</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="academicProfileDetail_E06" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Moe Myint Zu.jpg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Myint Zu </h5>

                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>MA(TEFL) University of Education (Yangon)</li>
                                <li>Diploma ECCD</li>
                                <li>Diploma ELTM</li>
                                <li>Diploma TESOL</li>
                                <li>London Teacher Training College UK online</li>
                                <li>IELTS Trainer</li>
                                <li>Teaching Experience: 8 Years</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="academicProfileDetail_L01" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/zayyar.jpg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Zay Yar </h5>

                                <span>Thai Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>Grew up in Thailand for over 10 years</li>
                                <li>Founder of a Thai Language school</li>
                                <li>Teaching Experience: over 5 Years</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="academicProfileDetail_L02" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Cheong.jpg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Cheong Ha</h5>

                                <span>Korean Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>Studying B.A(Electronic and Information Engineering Major, Sejong University, Korea)
                                </li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="academicProfileDetail_L03" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Tr.Khin Saung Hnin.jpg') }}" class="modalHeaderImg"
                                alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Saung Hnin </h5>

                                <span>Chinese Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>BA History</li>
                                <li>Diploma of marketing at MESI</li>
                                <li>Work Experience: Chinese Translator</li>
                                <li>Teaching Experience: 3 years </li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="academicProfileDetail_L04" tabindex="-1" role="dialog" aria-labelledby="academic"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modalHeader">
                            <img src="{{ asset('images/Tr Gen.jpeg') }}" class="modalHeaderImg" alt="teacher_img">
                            <div class="modalHeaderLine"></div>
                            <div class="modalHeaderTitle">
                                <h5>Tr. Gen </h5>

                                <span>French Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                            <p>
                            <ul>
                                <li>BA (French) MUFL</li>
                                <li>MA in International Development Studies, Faculty of Political Science, Chulalongkorn
                                    University</li>
                                <li>Teaching Experience: 6 months</li>
                            </ul>
                            </p>
                        </div>
                        <button class="btn button float-right" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
