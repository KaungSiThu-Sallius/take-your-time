@extends('admin.layout.master')
@section('title')
<title>Dashboard</title>
@endsection
@section('nav_items')
    <li class="active">
        <a href="{{url('admin/dashboard')}}">
            <img src="../images/dashboard.svg" alt="dashboard" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/scholarshipIndex')}}">
            <img src="../images/scholar.svg" alt="scholarship" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Scholarship</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/grantIndex')}}">
            <img src="{{asset('images/grant.svg')}}" alt="grant" type="image/svg+xml" class="svg_icon" />
            <span>Grant</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/conferenceIndex')}}">
            <img src="{{asset('images/conference.svg')}}" alt="grant" type="image/svg+xml" class="svg_icon" />
            <span>Conference</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/courseIndex')}}">
            <img src="{{asset('images/courses.svg')}}" alt="course" type="image/svg+xml" class="svg_icon" />
            <span>Course</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/jobIndex')}}">
            <img src="{{asset('images/jobs.svg')}}" alt="job" type="image/svg+xml" class="svg_icon" />
            <span>Job</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/otherIndex')}}">
            <img src="{{asset('images/others.svg')}}" alt="other" type="image/svg+xml" class="svg_icon" />
            <span>Other</span>
        </a>
    </li>


@endsection

@section('contents')
<section class="page-content">
    <div class="dashboard">
        <div class="container">
            <div class="row mt-4">
                <div class="offset-md-3 col-md-9 col-12">
                        <div>
                            <h2>Dashboard</h2>
                        </div>
                </div>
            </div>
            <div class="dashboard_card">
                <div class="row mt-4">
                    <div class="offset-md-3 col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">15</h3>
                                <h4>Total Posts</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">0</h3>
                                <h4>Likes</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>





        </div>
    </div>
</section>
@endsection
