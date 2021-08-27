@extends('admin.layout.master')
@section('title')
<title>Dashboard</title>
@endsection
@section('nav_items')
    <li class="active">
        <a href="{{url('admin/dashboard')}}">
            <img src="{{asset('images/dashboard.svg')}}" alt="dashboard" type="image/svg+xml" class="svg_icon icon_sidebar" />
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
    <li class="">
        <a href="{{url('admin/message')}}">
            <img src="{{asset('images/message.svg')}}" alt="messge" type="image/svg+xml" class="svg_icon" />
            <span>Message</span>
        </a>
    </li>


@endsection

@section('contents')
<div class="container">

    <div class="row mt-5">
        <div class="offset-md-3 col-md-9">
            <div class="heading mb-4">
                <div class="row">
                    <div class="col-6"><h2>
                        @if ($type == 'all_posts')
                            All Posts
                        @elseif ($type == 'today_posts')
                            Today Posts
                        @endif

                    </h2>
                </div>
                    <div class="col-6">
                        <a href="{{url('admin/dashboard')}}"><div style='float:right;' class="button btn">Back</div></a>
                    </div>
                </div>
            </div>
            <div class="table-responsive data_table">
                @include('admin.alert')
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Title</th>
                      <th scope="col">Section</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <th scope="row">{{($data->currentPage() - 1) * $data->perPage() + $loop->iteration}}</th>
                        <th>{{$d->title}}</th>
                        <td>
                            @if ($d->name == 'scholarship')
                                Scholarship
                            @elseif ($d->name == 'grant')
                                Grant
                            @elseif ($d->name == 'conference')
                                Conference
                            @elseif ($d->name == 'job')
                                Job
                            @elseif ($d->name == 'other')
                                Other
                            @endif
                        </td>
                        <td>
                            @if ($d->name == 'scholarship')
                            <a href="{{route('scholarship.show',$d->post_id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                <a href="{{route('scholarship.edit',$d->post_id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                <form action="{{route('scholarship.destroy', $d->post_id)}}" method="post" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-pill badge-danger"
                                  onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                </form>
                            @elseif ($d->name == 'grant')
                                <a href="{{route('grant.show',$d->post_id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                <a href="{{route('grant.edit',$d->post_id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                <form action="{{route('grant.destroy', $d->post_id)}}" method="post" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-pill badge-danger"
                                onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                </form>
                            @elseif ($d->name == 'conference')
                                <a href="{{route('conference.show',$d->post_id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                <a href="{{route('conference.edit',$d->post_id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                <form action="{{route('conference.destroy', $d->post_id)}}" method="post" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-pill badge-danger"
                                onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                </form>
                            @elseif ($d->name == 'job')
                                <a href="{{route('job.show',$d->post_id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                    <a href="{{route('job.edit',$d->post_id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                    <form action="{{route('job.destroy', $d->post_id)}}" method="post" style="display:inline;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-pill badge-danger"
                                      onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                </form>
                             @elseif ($d->name == 'other')
                                <a href="{{route('other.show',$d->post_id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                <a href="{{route('other.edit',$d->post_id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                <form action="{{route('other.destroy', $d->post_id)}}" method="post" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-pill badge-danger"
                                  onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                </form>
                            @endif

                            </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-center justify-content-center">
                {{$data->links()}}
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-5">
        <div class="offset-md-3 col-md-9">
            <div class="heading mb-4">
                <div class="row">
                    <div class="col-12"><h4>Courses</h4></div>
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
                    @foreach ($course as $c)
                    <tr>
                        <th scope="row">{{($course->currentPage() - 1) * $course->perPage() + $loop->iteration}}</th>
                        <th>{{$c->course_name}}</th>
                        <td>
                            @if ($c->type == 'free_course')
                                Free Course
                            @else
                                Paid Course
                            @endif
                        </td>
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
                {{$course->links()}}
            </div>
        </div>
    </div>
</div>

@endsection


