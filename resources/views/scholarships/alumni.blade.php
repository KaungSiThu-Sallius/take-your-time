@extends('layout.master')
@section('title')
    <title>Take Your Time - Alumni</title>
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

    <li class="nav-item dropdown active">
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

    <li class="nav-item dropdown">
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
    <!-- ------------------------- preview -------------------------  -->
    <section>
        <div class="preview">
            <h2 class="previewText">Scholarships</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/scholarships') }}" class="previewLink">Scholarships</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('scholarships/alumni') }}"
                        class="previewLink activeLink">Alumni</a></li>
            </ul>
        </div>
    </section>
    <!--------Pattern1 is for displaying contents on desktop or ipad ---------->
    <div class="alumni_pattern1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/phoebe.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <table class="table table-borderless alumni_table">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>Selena Gomez</td>
                            </tr>
                            <tr>
                                <th scope="row">Achievement</th>
                                <td>KAIST Scholarship</td>
                            </tr>
                            <tr>
                                <th scope="row">Experience</th>
                                <td class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                    earum laudantium autem harum ut fugit quidem facere vel? Dolorum voluptas doloribus
                                    pariatur cumque porro commodi suscipit explicabo aperiam, quidem laborum?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore
                                    dolorum expedita officiis obcaecati aspernatur consequatur dignissimos impedit.
                                    Veritatis laboriosam ducimus ipsum nulla ut, reprehenderit eum rem repellat?</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="alumni_lines">
                        <div class="alumni_diamond"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/phoebe.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <table class="table table-borderless alumni_table">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>Phoebe Buffay</td>
                            </tr>
                            <tr>
                                <th scope="row">Achievement</th>
                                <td>KAIST Scholarship</td>
                            </tr>
                            <tr>
                                <th scope="row">Experience</th>
                                <td class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                    earum laudantium autem harum ut fugit quidem facere vel? Dolorum voluptas doloribus
                                    pariatur cumque porro commodi suscipit explicabo aperiam, quidem laborum?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore
                                    dolorum expedita officiis obcaecati aspernatur consequatur dignissimos impedit.
                                    Veritatis laboriosam ducimus ipsum nulla ut, reprehenderit eum rem repellat?</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="alumni_lines">
                        <div class="alumni_diamond"></div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/sj.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <table class="table table-borderless alumni_table">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>Song Ji Hyo</td>
                            </tr>
                            <tr>
                                <th scope="row">Achievement</th>
                                <td>KAIST Scholarship</td>
                            </tr>
                            <tr>
                                <th scope="row">Experience</th>
                                <td class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                    earum laudantium autem harum ut fugit quidem facere vel? Dolorum voluptas doloribus
                                    pariatur cumque porro commodi suscipit explicabo aperiam, quidem laborum?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore
                                    dolorum expedita officiis obcaecati aspernatur consequatur dignissimos impedit.
                                    Veritatis laboriosam ducimus ipsum nulla ut, reprehenderit eum rem repellat?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/harry.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <table class="table table-borderless alumni_table">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>Harry Shum Jr.</td>
                            </tr>
                            <tr>
                                <th scope="row">Achievement</th>
                                <td>KAIST Scholarship</td>
                            </tr>
                            <tr>
                                <th scope="row">Experience</th>
                                <td class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae
                                    earum laudantium autem harum ut fugit quidem facere vel? Dolorum voluptas doloribus
                                    pariatur cumque porro commodi suscipit explicabo aperiam, quidem laborum?
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore
                                    dolorum expedita officiis obcaecati aspernatur consequatur dignissimos impedit.
                                    Veritatis laboriosam ducimus ipsum nulla ut, reprehenderit eum rem repellat?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!--------Pattern2 is for displaying contents on center for mobile ---------->

    <div class="alumni_pattern2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/sg.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <p class="alumni_property">Name<br><span class="alumni_initial">Selena Gomex</span></p>
                    <p class="alumni_property">Achievement<br><span class="alumni_initial">Harvard Scholarship</span>
                    </p>

                    <p class="alumni_property">Experience<br><span class="alumni_initial_para">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Vitae earum laudantium autem harum ut fugit quidem facere
                            vel? Dolorum voluptas doloribus pariatur cumque porro commodi suscipit explicabo aperiam,
                            quidem laborum?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore dolorum
                            expedita officiis obcaecati aspernatur consequatur dignissimos impedit. Veritatis laboriosam
                            ducimus ipsum nulla ut, reprehenderit eum rem repellat?</span></p>

                    <div class="alumni_lines">
                        <div class="alumni_diamond"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/sj.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <p class="alumni_property">Name<br><span class="alumni_initial">Song Ji Hyo</span></p>
                    <p class="alumni_property">Achievement<br><span class="alumni_initial">Harvard Scholarship</span>
                    </p>

                    <p class="alumni_property">Experience<br><span class="alumni_initial_para">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Vitae earum laudantium autem harum ut fugit quidem facere
                            vel? Dolorum voluptas doloribus pariatur cumque porro commodi suscipit explicabo aperiam,
                            quidem laborum?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore dolorum
                            expedita officiis obcaecati aspernatur consequatur dignissimos impedit. Veritatis laboriosam
                            ducimus ipsum nulla ut, reprehenderit eum rem repellat?</span></p>

                    <div class="alumni_lines">
                        <div class="alumni_diamond"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/harry.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <p class="alumni_property">Name<br><span class="alumni_initial">Harry Shum Jr.</span></p>
                    <p class="alumni_property">Achievement<br><span class="alumni_initial">Harvard Scholarship</span>
                    </p>

                    <p class="alumni_property">Experience<br><span class="alumni_initial_para">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Vitae earum laudantium autem harum ut fugit quidem facere
                            vel? Dolorum voluptas doloribus pariatur cumque porro commodi suscipit explicabo aperiam,
                            quidem laborum?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore dolorum
                            expedita officiis obcaecati aspernatur consequatur dignissimos impedit. Veritatis laboriosam
                            ducimus ipsum nulla ut, reprehenderit eum rem repellat?</span></p>

                </div>

                <div class="col-lg-6 col-md-6 alumni_content">
                    <div class="alumni_img_area">
                        <img src="{{ asset('images/phoebe.jpg') }}" alt="alumni_image" width="160">
                    </div>
                    <p class="alumni_property">Name<br><span class="alumni_initial">Phoebe Buffay</span></p>
                    <p class="alumni_property">Achievement<br><span class="alumni_initial">Harvard Scholarship</span>
                    </p>

                    <p class="alumni_property">Experience<br><span class="alumni_initial_para">Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Vitae earum laudantium autem harum ut fugit quidem facere
                            vel? Dolorum voluptas doloribus pariatur cumque porro commodi suscipit explicabo aperiam,
                            quidem laborum?
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde magni culpa dolore dolorum
                            expedita officiis obcaecati aspernatur consequatur dignissimos impedit. Veritatis laboriosam
                            ducimus ipsum nulla ut, reprehenderit eum rem repellat?</span></p>

                </div>


            </div>
        </div>
    </div>

@endsection
