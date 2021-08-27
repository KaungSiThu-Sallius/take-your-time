@extends('admin.layout.master')
@section('title')
    <title>Scholarship</title>
@endsection
@section('nav_items')
    <li class="">
        <a href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/dashboard.svg') }}" alt="dashboard" type="image/svg+xml" class="svg_icon" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="active">
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
    <li class="">
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
    <div class="scholarships">
        <div class="container">
            <div class="row mt-4">
                <div class="offset-md-3 col-md-9 col-12">
                    <div class="search">
                        <form action="{{ url('admin/scholarshipIndex/search') }}" method="GET">
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
                            <h5>Total Scholarships</h5>
                            <span class="badge badge-pill badge-default">{{ $total_scholar_count }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_info text-center">
                            <h5>Today Scholarships</h5>
                            <span class="badge badge-pill badge-default">{{ $today_scholar_count }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_info text-center">
                            <h5>Total Undergraduate</h5>
                            <span class="badge badge-pill badge-default">{{ $total_undergraduate_count }}</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="offset-md-3 col-md-3">
                        <div class="card_info text-center">
                            <h5>Total Master</h5>
                            <span class="badge badge-pill badge-default">{{ $total_master_count }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_info text-center">
                            <h5>Total PhD</h5>
                            <span class="badge badge-pill badge-default">{{ $total_phd_count }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_info text-center">
                            <h5>Total Fellowship</h5>
                            <span class="badge badge-pill badge-default">{{ $total_fellowship_count }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data">
                <div class="row mt-5">
                    <div class="offset-md-3 col-12 col-md-9 col-12">
                        <div class="heading">
                            <div class="row">
                                <div class="col-6">
                                    <h2>Scholarships</h2>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('scholarship.create') }}">
                                        <div class="button btn">Create</div>
                                    </a>

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
                                        <th scope="col">Type</th>
                                        <th scope="col">Deadline</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scholarships as $s)
                                        <tr>
                                            <th scope="row">
                                                {{ ($scholarships->currentPage() - 1) * $scholarships->perPage() + $loop->iteration }}
                                            </th>
                                            <th>{{ $s->title }}</th>
                                            <td>{{ $s->type }}</td>
                                            <td>{{ date('F j, Y', strtotime($s->deadline)) }}</td>
                                            <td>
                                                <a href="{{ route('scholarship.show', $s->id) }}"><span
                                                        class="badge badge-pill badge-info">Details</span></a>
                                                <a href="{{ route('scholarship.edit', $s->id) }}"><span
                                                        class="badge badge-pill badge-warning">Update</span></a>
                                                <form action="{{ route('scholarship.destroy', $s->id) }}" method="post"
                                                    style="display:inline;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge badge-pill badge-danger"
                                                        onclick="return confirm('Are you want to delete {{ $s->title }} ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center justify-content-center">
                            {{ $scholarships->links() }}
                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
