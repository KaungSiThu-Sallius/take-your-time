@extends('layout.master')

@section('nav_items')

    <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fas fa-home fa_hid"></i>
            <span>Home</span>
            <span class="sr-only">(current)</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}"><i class="fas fa-user fa_hid"></i>About
            Us</a>
    </li>

    <li class="nav-item dropdown active">
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
        <div class="preview detail_preview">
            <h2 class="previewText">Elizabeth Greenshields Scholarship at Laval University (Canada)</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/scholarships')}}" class="previewLink">Scholarships</a></li>
                <li class="breadcrumb-item"><a href="{{url('scholarships/undergraduate')}}" class="previewLink">Undergraudate</a></li>
                <li class="breadcrumb-item"><a href="{{url('/scholarships')}}" class="previewLink activeLink">Details</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- brief_info -------------------------  -->
    <div class="brief_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="img text-center">
                        <img src="{{asset('images/sample_uni.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-8 col-md-7">
                    <div class="info">
                        <p><i class="far fa-calendar-alt"></i>   <span style="font-weight: 600;">Deadline :</span> <span style="color: red">8 July, 2021</span></p>
                        <p> <i class="fas fa-signal"></i>   <span style="font-weight: 600;">Level :</span> Undergraduate, Master, PhD</p>
                        <p><i class="fas fa-graduation-cap"></i>   <span style="font-weight: 600;">Funding :</span> Fully Funded</p>
                        <p><i class="fas fa-globe"></i>   <span style="font-weight: 600;">Place :</span> Canada</p>
                        <p><i class="fa fa-user"></i>   <span style="font-weight: 600;">Given by :</span> Univarsity of Oxford<br></p>
                        <small>Updated on 28 July, 2021</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------- details -------------------------  -->
    <div class="details">
        <div class="container">
            <h3><span>Details</span></h3>
            <div class="detail_contents">
                <p>While students cannot combine HAN scholarships, they can combine a HAN scholarship with a scholarship from another organization. The scholarship is paid in 2 terms: in March and September. Keep in mind that tuition fees are due in the fall semester. You can only receive the payment if you’re enrolled as a HAN student, and you have a Dutch bank account in your name.</p>
            </div>
        </div>
    </div>
    <hr class="detail_hr">
    <!-- ------------------------- criteria -------------------------  -->
    <div class="criteria">
        <div class="container">
            <h3><span>Eligibility Criteria</span></h3>
            <p class="criteria_intro">To apply, students must be:</p>
            <ul>
                <li>A high school senior
                    <li>From at least one of the following ethnicities: African-American, American</li> <li>Indian/Alaska Native*, Asian & Pacific Islander American, and/or Hispanic American</li>
                    <li>A US citizen, national, or permanent resident</li>
                    <li>In good academic standing with a minimum cumulative weighted GPA of 3.3 on a 4.0 scale (or equivalent)</li>
                    <li>Additionally, a student must plan to enroll full-time, in a four-year degree program, at a US-accredited.</li>
            </ul>

        </div>
    </div>
    <hr class="detail_hr">
    <!-- ------------------------- benefit -------------------------  -->
    <div class="benefit">
        <div class="container">
            <h3><span>Benefits</span></h3>
            <ul>
                <li>A high school senior
                    <li>From at least one of the following ethnicities: African-American, American</li> <li>Indian/Alaska Native*, Asian & Pacific Islander American, and/or Hispanic American</li>
                    <li>A US citizen, national, or permanent resident</li>
                    <li>In good academic standing with a minimum cumulative weighted GPA of 3.3 on a 4.0 scale (or equivalent)</li>
                    <li>Additionally, a student must plan to enroll full-time, in a four-year degree program, at a US-accredited.</li>
            </ul>
        </div>
    </div>
    <hr class="detail_hr">

    <!-- ------------------------- application -------------------------  -->
    <div class="application">
        <div class="container">
            <h3><span>Application Process</span></h3>
            <ul>
                <li>A high school senior
                    <li>From at least one of the following ethnicities: African-American, American</li> <li>Indian/Alaska Native*, Asian & Pacific Islander American, and/or Hispanic American</li>
                    <li>A US citizen, national, or permanent resident</li>
                    <li>In good academic standing with a minimum cumulative weighted GPA of 3.3 on a 4.0 scale (or equivalent)</li>
                    <li>Additionally, a student must plan to enroll full-time, in a four-year degree program, at a US-accredited.</li>
            </ul>
        </div>
    </div>
    <hr class="detail_hr">

    <!-- ------------------------- specification -------------------------  -->
    <div class="specification">
        <div class="container">
            <h3><span>Specification</span></h3>
            <table class="table table-white table-striped mx-3 my-5">
                <tr>
                  <th>Type of Oppotunity</th>
                  <td>Conference</td>
                </tr>

                <tr>
                  <th>Deadline</th>
                  <td>28 July, 2021</td>
                </tr>

                <tr>
                    <th>Field</th>
                    <td>Environmental, Social Science</td>
                </tr>

                <tr>
                    <th>Place</th>
                    <td>Online</td>
                </tr>

                <tr>
                    <th>Open to</th>
                    <td>Youth</td>
                </tr>
        </table>
        </div>
    </div>

    <div class="detail_btns">
        <div class="container">
            <div class="filter_btns_group">
                <a href="#" class="filter_btn_link"><button type="button" class="btn">Official Website</button></a>
                <a href="#" class="filter_btn_link"><button type="button"
                        class="btn">Source</button></a>
            </div>
        </div>
    </div>

@endsection
