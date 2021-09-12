@extends('layout.master')

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

    <li class="nav-item dropdown active">
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
            <h2 class="previewText">Others</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ '/' }}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/others') }}" class="previewLink activeLink">Others</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- filter_nav -------------------------  -->
    <section class="filter_nav">
        <div class="container-fluid">
            <div class="filter_btns_group">
                <a href="{{ url('/others') }}" class="filter_btn_link"><button type="button"
                        class="btn active filter_btn">Others</button></a>
                <a href="{{ url('/others/seminars') }}" class="filter_btn_link"><button type="button"
                        class="btn">Seminars</button></a>
            </div>
        </div>
    </section>

    <!-- ------------------------- scholar_contents -------------------------  -->
    <section class="scholar_contents">
        <div class="container">
            <div class="row">
                @foreach ($other as $o)
                    <div class="col-md-6 col-lg-6 col-xl-4" data-aos="zoom-in">
                        <a href="{{ url('/others/detail/' . $o->slug . '/' . $o->id) }}">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('upload_images/' . $o->image) }}"
                                    alt="Other Image">
                                <div class="card-header">
                                    @if ($o->type == 'seminar')
                                        Seminar
                                    @endif
                                </div>
                                <div class="card-body">
                                    <div class="card-text">{{ $o->title }} <br> <span
                                            style="font-size: 16px; line-height: 37px; font-weight:bold;">({{ $o->place }})</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <i class="fa fa-hourglass-half pr-2" aria-hidden="true"
                                        style="color: #2b2e2d;"></i>{{ date('F j, Y', strtotime($o->deadline)) }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center justify-content-center">
                {{ $other->links() }}
            </div>
        </div>
    </section>
@endsection
