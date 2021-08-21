@extends('layout.master')
@section('title')
<title>Take Your Time - Paid Courses</title>
@endsection
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

    <li class="nav-item dropdown active">
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
            <a class="dropdown-item" href="{{url('jobs/internships')}}">Internships</a>
            <a class="dropdown-item" href="{{url('jobs/partTimeJobs')}}">Part-Time Jobs</a>
            <a class="dropdown-item" href="{{url('jobs/fullTimeJobs')}}">Full-Time Jobs</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                class="fas fa-ellipsis-h fa_hid"></i>Others</a>

        <div class="dropdown-menu dropdown-primary"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{url('others/seminars')}}">Seminars</a>
            <a class="dropdown-item" href="{{url('others/competitions')}}">Competitions</a>
        </div>
    </li>

@endsection

@section('contents')
<section>
    <div class="preview">
        <h2 class="previewText">Courses</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}" class="previewLink">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/courses')}}" class="previewLink">Courses</a></li>
            <li class="breadcrumb-item"><a href="{{url('/courses/paidCourses')}}" class="previewLink activeLink">Paid Courses</a></li>
        </ul>
    </div>
</section>

    <!-- ------------------------- filter_nav -------------------------  -->
    <section class="filter_nav">
        <div class="container-fluid">
            <div class="filter_btns_group">
                <a href="{{url('/courses')}}" class="filter_btn_link"><button type="button"
                        class="btn">All
                        Courses</button></a>
                <a href="{{url('/courses/freeCourses')}}" class="filter_btn_link"><button type="button" class="btn">Free
                        Courses</button></a>
                <a href="{{url('/courses/paidCourses')}}" class="filter_btn_link"><button type="button" class="btn active filter_btn">Paid
                        Courses</button></a>

            </div>
        </div>
    </section>

    <!-- ------------------------- course_contents -------------------------  -->
    <section class="course_contents">
        <div class="container">
            <div class="row">
                @foreach ($data as $d)
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <a href="{{url("/courses/detail/$d->slug/$d->id")}}">
                        <div class="card mb-5">
                            <img class="card-img" src="{{asset("images_database/$d->image")}}" alt="Course Image">
                            <div class="card-body title">
                                <h5 class="card-title text-center">{{$d->course_name}}
                                </h5>
                            </div>
                            <div class="courses_footer">
                                <div class="left_shape footer_shape"></div>
                                <div class="right_shape footer_shape"></div>
                                <span class="course_info">Paid Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center justify-content-center">
                {{$data->links()}}
            </div>
        </div>
    </section>


@endsection
