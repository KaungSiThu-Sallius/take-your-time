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

    <li class="nav-item dropdown active">
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
                <li class="breadcrumb-item"><a href="{{url('/others')}}" class="previewLink">Others</a></li>
                @if ($detail->type == 'seminar')
                    <li class="breadcrumb-item"><a href="{{url('others/seminars')}}"           class="previewLink">Seminars</a></li>
                @elseif ($detail->type == 'competition')
                    <li class="breadcrumb-item"><a href="{{url('others/competitions')}}"           class="previewLink">Competitions</a></li>
                @endif
                <li class="breadcrumb-item"><a href="{{url('#')}}" class="previewLink activeLink">Details</a></li>
            </ul>
        </div>
    </section>

    <!-- ------------------------- brief_info -------------------------  -->
    <div class="other_detail brief_info">
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
                        <p> <i class="fas fa-briefcase"></i>  <span style="font-weight: 600;">Oppotunity Type :</span>
                            @if ($detail->type == 'seminar')
                            Seminar
                            @elseif ($detail->type == 'competition')
                            Competition
                            @endif
                        </p>
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

    <!-- ------------------------- process -------------------------  -->
    <div class="application">
        <div class="container">
            <h3><span>Application Process</span></h3>
            <ul>

                @foreach ($process as $p)
                    <li>{{$p->process}}</li>
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
                  <td>                            @if ($detail->type == 'seminar')
                    Seminar
                    @elseif ($detail->type == 'competition')
                    Competition
                    @endif</td>
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
                    <th>Place</th>
                    <td>{{$detail->place}}</td>
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
