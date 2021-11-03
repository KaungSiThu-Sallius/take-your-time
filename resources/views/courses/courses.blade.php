@extends('layout.master')
@section('title')
    <title>Take Your Time - Courses</title>
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
            {{-- <a class="dropdown-item" href="{{ url('/scholarships/alumni') }}">Scholar Alumni</a> --}}
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
                <li class="breadcrumb-item"><a href="{{ url('/courses') }}" class="previewLink activeLink">Courses</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- filter_nav -------------------------  -->
    <section class="filter_nav">
        <div class="container-fluid">
            <div class="filter_btns_group">
                <a href="{{ url('/courses') }}" class="filter_btn_link"><button type="button"
                        class="btn active filter_btn">All
                        Courses</button></a>
                <a href="{{ url('/courses/freeCourses') }}" class="filter_btn_link"><button type="button"
                        class="btn">Free
                        Courses</button></a>
                <a href="{{ url('/courses/paidCourses') }}" class="filter_btn_link"><button type="button"
                        class="btn">Paid
                        Courses</button></a>

            </div>
        </div>
    </section>

    <!-- ------------------------- course_contents -------------------------  -->
    <section class="course_contents">
        <div class="container">
            <div class="row">
                @foreach ($courses as $c)
                    <div class="col-md-6 col-lg-6 col-xl-3" data-aos="zoom-in">
                        <a href="{{ url("/courses/detail/$c->slug/$c->id") }}">
                            <div class="card mb-5">
                                <img class="card-img" src="{{ asset("upload_images/$c->image") }}"
                                    alt="Course Image">
                                <div class="card-body title">
                                    <h5 class="card-title text-center">{{ $c->course_name }}
                                    </h5>
                                </div>
                                <div class="courses_footer">
                                    <div class="left_shape footer_shape"></div>
                                    <div class="right_shape footer_shape"></div>
                                    <span class="course_info">
                                        @if ($c->type == 'free_course')
                                            Free Course
                                        @else
                                            Paid Course
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center justify-content-center">
                {{ $courses->links() }}
            </div>
        </div>
    </section>


@endsection
