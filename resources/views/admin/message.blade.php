@extends('admin.layout.master')
@section('title')
    <title>Message</title>
@endsection
@section('nav_items')
    <li class="">
        <a href="{{ url('admin/dashboard') }}">
            <img src="{{ asset('images/dashboard.svg') }}" alt="dashboard" type="image/svg+xml"
                class="svg_icon icon_sidebar" />
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
            <img src="{{ asset('images/conference.svg') }}" alt="grant" type="image/svg+xml" class="svg_icon" />
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
    <li class="active">
        <a href="{{ url('admin/message') }}">
            <img src="{{ asset('images/message.svg') }}" alt="messge" type="image/svg+xml" class="svg_icon" />
            <span>Message</span>
        </a>
    </li>


@endsection

@section('contents')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="offset-md-3 col-md-9">
                <div class="heading mb-4">
                    <div class="row">
                        <div class="col-12">
                            <h2>All Messages</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive data_table">
                    @include('admin.alert')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $m)
                                <tr>
                                    <th scope="row">
                                        {{ ($messages->currentPage() - 1) * $messages->perPage() + $loop->iteration }}
                                    </th>
                                    <td>{{ $m->name }}</td>
                                    <td>
                                        {{ $m->email }}
                                    </td>
                                    <td>
                                        {{ $m->message }}
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/messages', $m->id) }}" method="post"
                                            style="display:inline;">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="badge badge-pill badge-danger"
                                                onclick="return confirm('Are you want to delete this message ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center justify-content-center">
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
