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
                        <a href="{{url('admin/dashboard/totalPosts')}}">
                            <div class="card_info text-left">
                                <h3 class="count_number">{{$total_posts_count}}</h3>
                                <h4>Total Posts</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('admin/dashboard/todayPosts')}}">
                            <div class="card_info text-left">
                                <h3 class="count_number">{{$today_posts_count}}</h3>
                                <h4>Today Posts</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="offset-md-3 col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">0</h3>
                                <h4>Today Comments</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">0</h3>
                                <h4>Today Like</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="offset-md-3 col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">0</h3>
                                <h4>Today New Users</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="card_info text-left">
                                <h3 class="count_number">0</h3>
                                <h4>Total Users</h4>
                                <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="data">
                <div class="row mt-5">
                    <div class="offset-md-3 col-12 col-md-9 col-12">
                        <div class="heading">
                            <div class="row">
                                <div class="col-12"><h3>Recent Posts</h3></div>
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
                                @foreach ($all_posts_data as $d)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <th>{{$d->title}}</th>
                                    <th>
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
                                    </th>
                                    <td>
                                        @if ($d->name == 'scholarship')
                                            <a href="{{route('scholarship.show',$d->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                            <a href="{{route('scholarship.edit',$d->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                            <form action="{{route('scholarship.destroy', $d->id)}}" method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="badge badge-pill badge-danger"
                                              onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                            </form>
                                        @elseif ($d->name == 'grant')
                                            <a href="{{route('grant.show',$d->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                            <a href="{{route('grant.edit',$d->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                            <form action="{{route('grant.destroy', $d->id)}}" method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="badge badge-pill badge-danger"
                                            onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                            </form>
                                        @elseif ($d->name == 'conference')
                                            <a href="{{route('conference.show',$d->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                            <a href="{{route('conference.edit',$d->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                            <form action="{{route('conference.destroy', $d->id)}}" method="post" style="display:inline;">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="badge badge-pill badge-danger"
                                            onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                            </form>
                                        @elseif ($d->name == 'job')
                                            <a href="{{route('job.show',$d->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                                <a href="{{route('job.edit',$d->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                                <form action="{{route('job.destroy', $d->id)}}" method="post" style="display:inline;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge badge-pill badge-danger"
                                                  onclick="return confirm('Are you want to delete {{$d->title}} ?')">Delete</button>
                                            </form>
                                         @elseif ($d->name == 'other')
                                            <a href="{{route('other.show',$d->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                            <a href="{{route('other.edit',$d->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                            <form action="{{route('other.destroy', $d->id)}}" method="post" style="display:inline;">
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
                    </div>
                </div>
            </div>

            <div class="data">
                <div class="row">
                    <div class="offset-md-3 col-12 col-md-9 col-12">
                        <div class="heading">
                            <div class="row">
                                <div class="col-12"><h3>Recent Comments</h3></div>
                            </div>
                        </div>

                        <div class="table-responsive data_table">
                            @include('admin.alert')
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Title</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>

                              </tbody>
                            </table>
                          </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
