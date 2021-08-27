@extends('admin.layout.master')
@section('title')
    <title>Detail Course</title>
@endsection
@section('nav_items')
    <li class="">
        <a href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/dashboard.svg') }}" alt="dashboard" type="image/svg+xml" class="svg_icon" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/scholarshipIndex') }}">
            <img src="{{ asset('images/scholar.svg') }}" alt="scholarship" type="image/svg+xml"
                class="svg_icon icon_sidebar" />
            <span>Scholarship</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/grantIndex') }}">
            <img src="{{ asset('images/grant.svg') }}" alt="grant" type="image/svg+xml" class="svg_icon" />
            <span>Grant</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/conferenceIndex') }}">
            <img src="{{ asset('images/conference.svg') }}" alt="conference" type="image/svg+xml" class="svg_icon" />
            <span>Conference</span>
        </a>
    </li>
    <li class="active">
        <a href="{{ url('admin/courseIndex') }}">
            <img src="{{ asset('images/courses.svg') }}" alt="course" type="image/svg+xml" class="svg_icon" />
            <span>Course</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/jobIndex') }}">
            <img src="{{ asset('images/jobs.svg') }}" alt="job" type="image/svg+xml" class="svg_icon" />
            <span>Job</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/otherIndex') }}">
            <img src="{{ asset('images/others.svg') }}" alt="other" type="image/svg+xml" class="svg_icon" />
            <span>Other</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/message') }}">
            <img src="{{ asset('images/message.svg') }}" alt="messge" type="image/svg+xml" class="svg_icon" />
            <span>Message</span>
        </a>
    </li>

@endsection

@section('contents')
    <style>
        td,
        th {
            line-height: 30px;
        }

    </style>
    <div class="course detail_scholar">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="offset-md-3 col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5>Course Detail</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Course Name</th>
                                            <td>{{ $course->course_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <td>{{ $course->type }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Taught By</th>
                                            <td>{{ $course->taught_by }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Deadline</th>
                                            <td>{{ date('F j, Y', strtotime($course->deadline)) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Course Start Date</th>
                                            <td>{{ date('F j, Y', strtotime($course->start_date)) }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Price</th>
                                            <td>
                                                @if ($course->price == 0)
                                                    FOC
                                                @else
                                                    {{ $course->price }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Class Timetable</th>
                                            <td>
                                                {{ $course->timetable }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Place</th>
                                            <td>{{ $course->place }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Details</th>
                                            <td>{{ $course->details }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Apply Form Link</th>
                                            <td>{{ $course->apply_form_link }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Course Duration</th>
                                            <td>{{ $course->course_duration }}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                <img src="{{ asset("post_images/$course->image") }}" alt="course_image"
                                                    style="width:200px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Action</th>
                                            <td>
                                                <a href="#"><span class="badge badge-pill badge-warning">Update</span></a>
                                                <a href="#"> <span class="badge badge-pill badge-danger">Delete</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="float: right;" class="mb-4">
                                    <a href="{{ url('admin/courseIndex') }}">
                                        <div class="button btn">Back</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
