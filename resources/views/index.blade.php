@extends('layout.master')
@section('title')
<title>Take Your Time</title>
@endsection
@section('nav_items')

    <li class="nav-item active">
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

    <!-- ------------------------- main -------------------------  -->
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="main_label">
                        <h1>Youths... Grab a Chance!</h1>
                        <h3>Just take your time and do it right...</h3>
                        <form action="{{url('search')}}" method="get">
                            <div class="row">
                                <div class="col-6">
                                    <select name="oppotunity" id="oppotunity-select" class="browser-default custom-select" placeholder="Oppotunities">
                                        <option value="">Oppotunities</option>
                                        <optgroup label="Scholarships">
                                            <option value="undergraduate">Undergraduate</option>
                                            <option value="master">Master</option>
                                            <option value="phd">PhD</option>
                                            <option value="fellowship">Fellowship</option>
                                        </optgroup>
                                        <optgroup label="Grants">
                                            <option value="grant">Grants</option>
                                        </optgroup>
                                        <optgroup label="Conferences">
                                            <option value="conference">Conferences</option>
                                        </optgroup>
                                        <optgroup label="Courses">
                                            <option value="free_course">Free Courses</option>
                                            <option value="paid_course">Paid Courses</option>
                                        </optgroup>
                                        <optgroup label="Jobs">
                                            <option value="internship">Internships</option>
                                            <option value="part_time_job">Part-Time Jobs</option>
                                            <option value="full_time_job">Full-Time Jobs</option>
                                        </optgroup>
                                        <optgroup label="Others">
                                            <option value="seminar">Seminars</option>
                                            <option value="competition">Competitions</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <select name='place' class="browser-default custom-select" placeholder="Regions" id="place">
                                        <option value="">Regions</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn button" value="Search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="images/main_graphic.svg" alt="guy_sitting_on_books" type="image/svg+xml" class="main_img"
                        width="450">
                </div>
            </div>
        </div>
    </div>

    <!-- ------------------------- featured_oppo -------------------------  -->
    <div class="featured_oppo">
        <div class="featured_heading text-center">
            <h2> <span>Featured Oppotunities</span> </h2>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($featured_oppo as $f)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        @if ($f->name == 'scholarship')
                            <a href="{{url("/scholarships/detail/$f->slug/$f->post_id")}}">
                        @elseif ($f->name == 'grant')
                            <a href="{{url("/grants/detail/$f->slug/$f->post_id")}}">
                        @elseif($f->name == 'conference')
                            <a href="{{url("/conferences/detail/$f->slug/$f->post_id")}}">
                        @endif
                            <div class="featured_card card">
                                <div class="view overlay card_img">
                                    <img class="card-img-top" src="{{asset("images_database/$f->image")}}" alt="Featured Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$f->title}}</h5>

                                </div>
                                <div class="featured_card_info">
                                    <span class="badge badge-pill badge-light" style="margin-bottom: 5px;">Deadline:
                                        {{date('F j, Y', strtotime($f->deadline))}}</span>
                                        <br>
                                    <span class="badge badge-pill badge-light">
                                        @if ($f->name == 'scholarship')
                                        {{str_replace(',',', ',$f->type)}}
                                        @endif
                                        @if ($f->name == 'grant')
                                            Grant
                                        @endif
                                        @if ($f->name == 'conference')
                                            Conference
                                        @endif
                                        @if ($f->name == 'part_time_job')
                                            Part-Time Job
                                        @endif
                                        @if ($f->name == 'full_time_job')
                                            Full-Time Job
                                        @endif
                                        @if ($f->name == 'internship')
                                            Internship
                                        @endif
                                        @if ($f->name == 'seminar')
                                            Seminar
                                        @endif
                                        @if ($f->name == 'competition')
                                            Competition
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- ------------------------- latest_scholar -------------------------  -->
    <div class="latest_scholar">
        <div class="container">
            <h2><span>Latest Scholarships</span></h2>
            <div class="scholar_cards">
                <div class="row">
                    @foreach ($latest_scholar as $scholar)
                    <div class="col-md-4">
                        <a href="{{url("/scholarships/detail/$scholar->slug/$scholar->id")}}">
                            <div class="card mb-2">
                                <div class="img_holder">
                                    <img class="card-img" src="{{asset("images_database/$scholar->image")}}" alt="Organization Image">
                                    <span style="width: 100%; text-align:center; font-size: 14px">
                                       {{str_replace(',',', ',$scholar->type)}}
                                    </span>
                                </div>
                                <div class="card-body title">
                                    <h5 class="card-title">{{$scholar->title}}</h5>
                                </div>
                                <div class="latest_scholar_detail text-center">
                                    <p>More Info <i class="fas fa-caret-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <a href="{{url('scholarships')}}"> <div class="btn button explore_btn">Explore More <i class="fas fa-chevron-right ml-1"></i></div></a>
            </div>
        </div>
    </div>

    <!-- ------------------------- latest_oppo -------------------------  -->
    <div class="latest_oppo">
        <div class="container">
            <h2><span>Oppotunities</span></h2>
            <div class="row mb-md-5">
                <div class="col-md-6">
                    <div class="oppo_card_heading">
                        <div class="parallelogram">
                            <div class="heading_text">
                                Grants
                            </div>
                        </div>
                    </div>
                    <div class="card latest_oppo_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="latest_oppo_img">
                                        <img src="{{asset("images_database/".$grants[0]->image)}}" alt="organization_photo">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/grants/detail/".$grants[0]->slug."/".$grants[0]->id)}}">
                                            <h5>{{$grants[0]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($grants[0]->deadline))}}</p>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/grants/detail/".$grants[1]->slug."/".$grants[1]->id)}}">
                                            <h5>{{$grants[1]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($grants[1]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/grants/detail/".$grants[2]->slug."/".$grants[2]->id)}}">
                                            <h5>{{$grants[2]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($grants[1]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oppo_card_heading">
                        <div class="parallelogram">
                            <div class="heading_text">
                                Conferences
                            </div>
                        </div>
                    </div>
                    <div class="card latest_oppo_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="latest_oppo_img">
                                        <img src="{{asset("images_database/".$conferences[0]->image)}}" alt="organization_photo">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/conferences/detail/".$conferences[0]->slug."/".$conferences[0]->id)}}">
                                            <h5>{{$conferences[0]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($conferences[0]->deadline))}}</p>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/conferences/detail/".$conferences[1]->slug."/".$conferences[1]->id)}}">
                                            <h5>{{$conferences[1]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($conferences[1]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="{{url("/conferences/detail/".$conferences[2]->slug."/".$conferences[2]->id)}}">
                                            <h5>{{$conferences[2]->title}}</h5>
                                        </a>
                                        <p>Deadline: Deadline: {{date('F j, Y', strtotime($conferences[2]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="oppo_card_heading">
                        <div class="parallelogram">
                            <div class="heading_text">
                                Jobs
                            </div>
                        </div>
                    </div>
                    <div class="card latest_oppo_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="latest_oppo_img">
                                        <img src="{{$jobs[0]->image}}" alt="organization_photo">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$jobs[0]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($jobs[0]->deadline))}}</p>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$jobs[1]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($jobs[1]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$jobs[2]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($jobs[2]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oppo_card_heading">
                        <div class="parallelogram">
                            <div class="heading_text">
                                Others
                            </div>
                        </div>
                    </div>
                    <div class="card latest_oppo_card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="latest_oppo_img">
                                        <img src="{{$others[0]->image}}" alt="organization_photo">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$others[0]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($others[0]->deadline))}}</p>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$others[1]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($others[1]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <div class="latest_oppo_label">
                                        <a href="#">
                                            <h5>{{$others[2]->title}}</h5>
                                        </a>
                                        <p>Deadline: {{date('F j, Y', strtotime($others[2]->deadline))}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ------------------------- latest_courses -------------------------  -->
    <div class="latest_courses">
        <div class="container">
            <h2><span>Latest Courses</span></h2>
            <div class="row">
                @foreach ($courses as $c)
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="{{url("/courses/detail/$c->slug/$c->id")}}">
                        <div class="card mb-2">
                            <img class="card-img" src="{{asset("images_database/$c->image")}}" alt="Course Image">
                            <div class="card-body title">
                                <h5 class="card-title text-center">{{$c->course_name}}
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
            <div class="text-center">
                <a href="{{url('/courses')}}"><div class="btn button explore_btn waves-effect waves-light">Explore More <i
                    class="fas fa-chevron-right ml-1"></i></div></a>
            </div>

        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('#oppotunity-select').on('change', function () {

                let oppotunity = $(this).val();
                let responseArray = []

                $('#place').empty();
                $('#place').append('<option value="0" disabled selected>Processing...</option>');
                $.ajax({
                    type: 'GET',
                    url: 'regionFetch/' + oppotunity,
                    success: function (response) {
                        var response = JSON.parse(response);
                        $('#place').empty();
                        $('#place').append('<option value="">Regions</option>');
                            response.forEach(element => {
                                if (!responseArray.includes(element['place'])){
                                    $('#place').append(`<option value="${element['place']}">${element['place']}</option>`);

                                }
                                responseArray.push(element['place'])
                            });
                    }
                });
            });
        });
    </script>

@endsection
