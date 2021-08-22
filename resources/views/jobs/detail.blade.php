@extends('layout.master')
@section('title')
<title>Take Your Time - {{$detail->title}}</title>
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

    <li class="nav-item dropdown active">
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
            <h2 class="previewText">{{$detail->title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" class="previewLink">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/jobs')}}" class="previewLink">Jobs</a></li>
                @if ($detail->type == 'part_time_job')
                    <li class="breadcrumb-item"><a href="{{url('jobs/partTime')}}"           class="previewLink">Part-Time Jobs</a></li>
                @elseif ($detail->type == 'full_time_job')
                    <li class="breadcrumb-item"><a href="{{url('jobs/fullTime')}}"           class="previewLink">Full-Time Jobs</a></li>
                @elseif ($detail->type == 'internship')
                    <li class="breadcrumb-item"><a href="{{url('jobs/internships')}}"           class="previewLink">Internships</a></li>
                @endif
                <li class="breadcrumb-item"><a href="{{url('#')}}" class="previewLink activeLink">Details</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- brief_info -------------------------  -->
    <div class="brief_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-5">
                    <div class="img text-center">
                        <img src='{{asset("images_database/$detail->image")}}' alt="">
                    </div>
                </div>
                <div class="col-xl-8 col-md-7">
                    <div class="info">
                        <p><i class="far fa-calendar-alt"></i>   <span style="font-weight: 600;">Application Deadline :</span> <span style="color: red">{{date('F j, Y', strtotime($detail->deadline))}}</span></p>
                        <p> <i class="fas fa-briefcase"></i>  <span style="font-weight: 600;">Job Type :</span>
                            @if ($detail->type == 'full_time_job')
                                Full-Time Job
                            @elseif ($detail->type == 'part_time_job')
                                Part-Time Job
                            @elseif ($detail->type == 'internship')
                                Internship
                            @endif
                        </p>
                        <p><i class="fas fa-hand-holding-usd"></i>   <span style="font-weight: 600;">Salary :</span> {{$detail->salary}}</p>
                        <p><i class="fas fa-globe"></i>   <span style="font-weight: 600;">Place :</span> {{$detail->place}}</p>
                        <p><i class="fa fa-user"></i>   <span style="font-weight: 600;">Organization :</span> {{$detail->organization_name}}<br></p>
                        <small>Updated on {{date('F j, Y', strtotime($detail->updated_at))}}</small>
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
                <p>{{$detail->details}}</p>
            </div>
        </div>
    </div>
    <hr class="detail_hr">
    <!-- ------------------------- criteria -------------------------  -->
    <div class="criteria">
        <div class="container">
            <h3><span style="line-height: 50px;">Eligibility Criteria and Qualification</span></h3>
            <p class="criteria_intro">To apply, cadidate must :</p>
            <ul>
                @foreach ($criteria as $c)
                    <li>{{$c->criteria}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <hr class="detail_hr">
    <!-- ------------------------- benefit -------------------------  -->
    <div class="benefit">
        <div class="container">
            <h3><span>Benefits</span></h3>
            <ul>

                    @foreach ($benefit as $b)
                        <li>{{$b->benefit}}</li>
                    @endforeach

            </ul>
        </div>
    </div>
    <hr class="detail_hr">

    <!-- ------------------------- document -------------------------  -->
    <div class="application">
        <div class="container">
            <h3><span>Required Documents</span></h3>
            <ul>

                @foreach ($document as $d)
                    <li>{{$d->document}}</li>
                @endforeach

        </ul>
        </div>
    </div>
    <hr class="detail_hr">

    <!-- ------------------------- other_information -------------------------  -->
    @if ($detail->other_information != null)
        <div class="details other_information">
            <div class="container">
                <h3><span>Other Information</span></h3>
                <div class="detail_contents">
                    <p>{{$detail->other_information}}</p>
                </div>
            </div>
        </div>
        <hr class="detail_hr">
    @endif


    <!-- ------------------------- specification -------------------------  -->
    <div class="specification">
        <div class="container">
            <h3><span>Specification</span></h3>
            <table class="table table-white table-striped mx-3 my-5">
                <tr>
                  <th>Type of Oppotunity</th>
                  <td>{{$detail->type}}</td>
                </tr>

                <tr>
                    <th>Job Role</th>
                    <td>{{$detail->title}}</td>
                  </tr>

                <tr>
                  <th>Application Deadline</th>
                  <td>{{date('F j, Y', strtotime($detail->deadline))}}</td>
                </tr>

                <tr>
                    <th>Job Start Date</th>
                    <td>{{date('F j, Y', strtotime($detail->start_date))}}</td>
                </tr>
                <tr>
                    <th>Job Duration</th>
                    <td>{{$detail->job_duration}}</td>
                </tr>

                <tr>
                    <th>Place</th>
                    <td>{{$detail->country}}</td>
                </tr>

        </table>
        </div>
    </div>

    <div class="detail_btns">
        <div class="container">
            <div class="filter_btns_group">
                <a href='{{$detail->apply_form_link}}' class="filter_btn_link"><button type="button"
                        class="btn">Source</button></a>
            </div>
        </div>
    </div>

@endsection
