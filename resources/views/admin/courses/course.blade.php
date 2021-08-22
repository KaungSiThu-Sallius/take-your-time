@extends('admin.layout.master')
@section('title')
<title>Course</title>
@endsection
@section('nav_items')
    <li class="">
        <a href="{{url('admin/dashboard')}}">
            <img src="{{asset('images/dashboard.svg')}}" alt="dashboard" type="image/svg+xml" class="svg_icon" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/scholarshipIndex')}}">
            <img src="{{asset('images/scholar.svg')}}" alt="scholarship" type="image/svg+xml" class="svg_icon icon_sidebar" />
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
            <img src="{{asset('images/conference.svg')}}" alt="conference" type="image/svg+xml" class="svg_icon" />
            <span>Conference</span>
        </a>
    </li>
    <li class="active">
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
<div class="courses">
    <div class="container">
        <div class="row mt-4">
            <div class="offset-md-3 col-md-9 col-12">
                <div class="search">
                    <form action="{{url('admin/courseIndex/search')}}" method="GET">
                        <input type="text" class="searchTerm" name="searchData" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="row mt-5">
                <div class="offset-md-3 col-md-3">
                    <div class="card_info text-center">
                        <h4>Total Courses</h4>
                        <span class="badge badge-pill badge-default">{{$total_course_count}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card_info text-center">
                        <h4>Total Free Courses</h4>
                        <span class="badge badge-pill badge-default">{{$total_free_course_count}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card_info text-center">
                        <h4>Total Paid Courses</h4>
                        <span class="badge badge-pill badge-default">{{$total_paid_course_count}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="row mt-5">
                <div class="offset-md-3 col-12 col-md-9 col-12">
                    <div class="heading">
                        <div class="row">
                            <div class="col-6"><h2>Courses</h2></div>
                            <div class="col-6">
                                <a href="{{route('course.create')}}"><div class="button btn">Create</div></a>

                            </div>
                        </div>
                    </div>


                    <div class="table-responsive data_table">
                        @include('admin.alert')
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Course Name</th>
                              <th scope="col">Type</th>
                              <th scope="col">Start Date</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($courses as $c)
                            <tr>
                                <th scope="row">{{($courses->currentPage() - 1) * $courses->perPage() + $loop->iteration}}</th>
                                <th>{{$c->course_name}}</th>
                                <th>
                                    @if ($c->type == 'free_course')
                                        Free Course
                                    @else
                                        Paid Course
                                    @endif
                                </th>
                                <td>{{date('F j, Y', strtotime($c->start_date))}}</td>
                                <td>
                                    <a href="{{route('course.show',$c->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                    <a href="{{route('course.edit',$c->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                    <form action="{{route('course.destroy', $c->id)}}" method="post" style="display:inline;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-pill badge-danger"
                                      onclick="return confirm('Are you want to delete {{$c->course_name}} ?')">Delete</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="d-flex justify-content-center justify-content-center">
                        {{$courses->links()}}
                    </div>



                </div>

            </div>
        </div>

    </div>
</div>
@endsection
