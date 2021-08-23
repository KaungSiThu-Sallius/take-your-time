@extends('layout.master')
@section('title')
<title>Take Your Time - About Us</title>
@endsection
@section('nav_items')

    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-home fa_hid"></i>
            <span>Home</span>
            <span class="sr-only">(current)</span>
        </a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{url('/about')}}"><i class="fas fa-user fa_hid"></i>About
            Us</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="fas fa-graduation-cap fa_hid"></i>Scholarships</a>

        <div class="dropdown-menu dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/scholarships/undergraduate')}}">Undergraduate</a>
            <a class="dropdown-item" href="{{url('/scholarships/master')}}">Master</a>
            <a class="dropdown-item" href="{{url('/scholarships/phd')}}">PhD</a>
            <a class="dropdown-item" href="{{url('/scholarships/fellowship')}}">Fellowship</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('/grants')}}"><i
                class="fas fa-hand-holding-usd fa_hid"></i></i>Grants</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('/conferences')}}"> <i
                class="fas fa-users fa_hid"></i></i></i>Conferences</a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="fab fa-leanpub fa_hid"></i>Courses</a>

        <div class="dropdown-menu dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/courses/freeCourses')}}">Free Courses</a>
            <a class="dropdown-item" href="{{url('/courses/paidCourses')}}">Paid Courses</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="fas fa-briefcase fa_hid"></i>Jobs</a>

        <div class="dropdown-menu dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/jobs/internships')}}">Internships</a>
            <a class="dropdown-item" href="{{url('/jobs/partTimeJobs')}}">Part-Time Jobs</a>
            <a class="dropdown-item" href="{{url('/jobs/fullTimeJobs')}}">Full-Time Jobs</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="fas fa-ellipsis-h fa_hid"></i>Others</a>

        <div class="dropdown-menu dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('/others/seminars')}}">Seminars</a>
            <a class="dropdown-item" href="{{url('/others/competitions')}}">Competitions</a>
        </div>
    </li>

@endsection

@section('contents')
    <!-- ------------------------- preview -------------------------  -->
    <section>
        <div class="preview">
            <h2 class="previewText">Who we are</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="previewLink activeLink">About Us</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- intro -------------------------  -->
    <section class="intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">

                    <div>
                        <img src="images/about_intro.svg" class="w-80 introImg" alt="guys_greeting_img">
                    </div>

                </div>

                <div class="col-md-6 col-12">

                    <div class="introText">
                        <h3>Here will go about what organization is it and wht provide</h3>
                        <p>
                            Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet
                            nibh. Donec sodales sagittis Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed
                            fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------- what_we_do -------------------------  -->
    <section class="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">What We Are Doing</h3>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="what_we_do_task">
                        <div class="what_we_do_card">
                            <fieldset>
                                <legend>
                                    <div class="what_we_do_icon">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </legend>
                            </fieldset>
                            <div class="what_we_do_info">
                                <h4>Provide Youth Valuable Info</h4>
                                <div class="divider">
                                    <div class="line"></div>
                                    <div class="circle"></div>
                                    <div class="line"></div>
                                </div>
                                <p class="what_we_do_text">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                                    Sed
                                    fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo
                                    eget bibendum sodales, augue velit cursus nunc.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="what_we_do_task">
                        <div class="what_we_do_card">
                            <fieldset>
                                <legend>
                                    <div class="what_we_do_icon">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </legend>
                            </fieldset>
                            <div class="what_we_do_info">
                                <h4>Provide Youth Valuable Info</h4>
                                <div class="divider">
                                    <div class="line"></div>
                                    <div class="circle"></div>
                                    <div class="line"></div>
                                </div>
                                <p class="what_we_do_text">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                                    Sed
                                    fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo
                                    eget bibendum sodales, augue velit cursus nunc.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="what_we_do_task">
                        <div class="what_we_do_card">
                            <fieldset>
                                <legend>
                                    <div class="what_we_do_icon">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </legend>
                            </fieldset>
                            <div class="what_we_do_info">
                                <h4>Provide Youth Valuable Info</h4>
                                <div class="divider">
                                    <div class="line"></div>
                                    <div class="circle"></div>
                                    <div class="line"></div>
                                </div>
                                <p class="what_we_do_text">Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                                    Sed
                                    fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo
                                    eget bibendum sodales, augue velit cursus nunc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ------------------------- founder -------------------------  -->
    <section class="founder">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-12">
                    <img src="images/team_founder.png" class="founderImg" alt="founder_img">
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="founderText">
                        <h3><span style="font-weight: 500;">Who started</span> ‘Take Your Time’?</h3>
                        <p class="founderIntro"><span style="font-weight: bold;">'Take Your Time'</span> began as the
                            vision of one person, Lorm Apsom,
                            whose
                            life has been lorem apsom changed by global loream apsom student opportunities. </p>
                        <p class="founderMore">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
                            tempore ducimus commodi molestias quisquam corporis. Dignissimos similique officiis nisi
                            labore voluptatum dolorum quo nemo eius reiciendis repudiandae rem, expedita neque.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------- team -------------------------  -->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center team_header">Meet Our Team</h3>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="teamMember card">
                        <img src="images/team_member_2.png" class="teamImg" alt="team_member_img">
                        <div class="teamInfo">
                            <div>
                                <img src="images/team_members_icon1.svg" class="teamInfoIcon" alt="team_member_icon">
                            </div>
                            <div class="teamInfoText">
                                <h4>Lee Gi Eun</h4>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="teamMember card">
                        <img src="images/team_member.png" class="teamImg" alt="team_member_img">
                        <div class="teamInfo">
                            <div>
                                <img src="images/team_members_icon2.svg" class="teamInfoIcon" alt="team_member_icon">
                            </div>
                            <div class="teamInfoText">
                                <h4>Jhon Smith</h4>
                                <p>Marketer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teamMember card">
                        <img src="images/team_member_2.png" class="teamImg" alt="team_member_img">
                        <div class="teamInfo">
                            <div>
                                <img src="images/team_members_icon1.svg" class="teamInfoIcon" alt="team_member_icon">
                            </div>
                            <div class="teamInfoText">
                                <h4>Lee Gi Eun</h4>
                                <p>Creative Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="teamMember card">
                        <img src="images/team_member.png" class="teamImg" alt="team_member_img">
                        <div class="teamInfo">
                            <div>
                                <img src="images/team_members_icon2.svg" class="teamInfoIcon" alt="team_member_icon">
                            </div>
                            <div class="teamInfoText">
                                <h4>Jhon Smith</h4>
                                <p>Marketer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------- keepInTouch -------------------------  -->
    <section class="keepInTouch">
        <div class="container">
            <h3 class="text-center">Keep In Touch</h3>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form action="{{url('/sendMessage')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" class="form-control" required/>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="" cols="20" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Send Message" class="btn button" />
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('alert')
    @include('alert')
@endsection
