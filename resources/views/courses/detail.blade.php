@extends('layout.master')
@section('title')
    <title>Take Your Time - {{ $detail->course_name }}</title>
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
            <a class="dropdown-item" href="{{ url('/scholarships/alumni') }}">Scholar Alumni</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/grants') }}"><i class="fas fa-hand-holding-usd fa_hid"></i></i>Grants</a>
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
            <a class="dropdown-item" href="{{ url('/competitions') }}">Competitions</a>
        </div>
    </li>

@endsection

@section('contents')
    <!-- ------------------------- preview -------------------------  -->
    <section>
        <div class="preview detail_preview">
            <h2 class="previewText">{{ $detail->course_name }}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}" class="previewLink">Courses</a></li>
                @if ($detail->type == 'free_course')
                    <li class="breadcrumb-item"><a href="{{ url('courses/freeCourses') }}" class="previewLink">Free
                            Courses</a></li>
                @elseif ($detail->type == 'paid_course')
                    <li class="breadcrumb-item"><a href="{{ url('courses/paidCourses') }}" class="previewLink">Paid
                            Courses</a></li>
                @endif
                <li class="breadcrumb-item"><a href="{{ url('#') }}" class="previewLink activeLink">Details</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- brief_info -------------------------  -->
    <div class="brief_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="img text-center">
                        <img src='{{ asset("upload_images/$detail->image") }}' alt="">
                    </div>
                </div>
                <div class="col-xl-8 col-md-7">
                    <div class="info">
                        <p><i class="far fa-calendar-alt"></i> <span style="font-weight: 600;">Course Start Date :</span>
                            <span style="color: red">{{ date('F j, Y', strtotime($detail->start_date)) }}</span>
                        </p>
                        <p><i class="fas fa-hand-holding-usd"></i> <span style="font-weight: 600;"> Price :</span>
                            @if ($detail->price == 0)
                                Free Course
                            @else
                                {{ $detail->price }} Kyats
                            @endif
                        </p>
                        <p><i class="fas fa-clock"></i> <span style="font-weight: 600;">Place :</span>
                            {{ $detail->place }}</p>
                        <p><i class="fas fa-globe"></i> <span style="font-weight: 600;">Duration :</span>
                            {{ $detail->course_duration }}</p>
                        <p><i class="fa fa-user"></i> <span style="font-weight: 600;">Taught by :</span>
                            {{ $detail->taught_by }}<br></p>
                        <small>Updated on {{ date('F j, Y', strtotime($detail->updated_at)) }}</small>
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
                <p>{{ $detail->details }}</p>
            </div>
        </div>
    </div>
    <hr class="detail_hr">


    <!-- ------------------------- specification -------------------------  -->
    <div class="specification">
        <div class="container">
            <h3><span>Specification</span></h3>
            <table class="table table-white table-striped mx-3 my-5">
                <tr>
                    <th>Course Name</th>
                    <td>{{ $detail->course_name }}</td>
                </tr>
                <tr>
                    <th>Course Timetable</th>
                    <td>{{ $detail->timetable }}</td>
                </tr>
                <tr>
                    <th>Type of Course</th>
                    <td>{{ $detail->type }}</td>
                </tr>

                <tr>
                    <th>Course Duration</th>
                    <td>{{ $detail->course_duration }}</td>
                </tr>

                <tr>
                    <th>Course Application Deadline</th>
                    <td>{{ date('F j, Y', strtotime($detail->deadline)) }}</td>
                </tr>

                <tr>
                    <th>Course Start Date</th>
                    <td>{{ date('F j, Y', strtotime($detail->start_date)) }}</td>
                </tr>

                <tr>
                    <th>Place</th>
                    <td>{{ $detail->place }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>
                        @if ($detail->price == 0)
                            Free Course
                        @else
                            {{ $detail->price }} Kyats
                        @endif
                    </td>
                </tr>

            </table>
        </div>
    </div>

    <div class="detail_btns">
        <div class="container">
            <div class="filter_btns_group">
                <a href='{{ $detail->apply_form_link }}' class="filter_btn_link"><button type="button"
                        class="btn">Course
                        Application</button></a>
            </div>
        </div>
    </div>

@endsection
