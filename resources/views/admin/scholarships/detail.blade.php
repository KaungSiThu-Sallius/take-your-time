@extends('admin.layout.master')
@section('title')
    <title>Detail Scholarship</title>
@endsection
@section('nav_items')
    <li class="">
        <a href=" {{ url('admin/dashboard') }}">
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
        <a href=" {{ url('admin/grantIndex') }}">
        <img src="{{ asset('images/grant.svg') }}" alt="grant" type="image/svg+xml" class="svg_icon" />
        <span>Grant</span>
        </a>
    </li>
    <li>
        <a href=" {{ url('admin/competitionIndex') }}">
            <img src="{{ asset('images/award.svg') }}" alt="competition" type="image/svg+xml" class="svg_icon" />
            <span>Competition</span>
        </a>
    </li>
    <li class="">
        <a href=" {{ url('admin/conferenceIndex') }}">
        <img src="{{ asset('images/conference.svg') }}" alt="conference" type="image/svg+xml" class="svg_icon" />
        <span>Conference</span>
        </a>
    </li>
    <li class="">
        <a href=" {{ url('admin/courseIndex') }}">
        <img src="{{ asset('images/courses.svg') }}" alt="course" type="image/svg+xml" class="svg_icon" />
        <span>Course</span>
        </a>
    </li>
    <li class="">
        <a href=" {{ url('admin/jobIndex') }}">
        <img src="{{ asset('images/jobs.svg') }}" alt="job" type="image/svg+xml" class="svg_icon" />
        <span>Job</span>
        </a>
    </li>
    <li class="">
        <a href=" {{ url('admin/otherIndex') }}">
        <img src="{{ asset('images/others.svg') }}" alt="other" type="image/svg+xml" class="svg_icon" />
        <span>Other</span>
        </a>
    </li>
    <li class="">
        <a href=" {{ url('admin/message') }}">
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
    <div class="detail_scholar">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="offset-md-3 col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h5>Scholarship Detail</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Title</th>
                                            <td>{{ $scholarship->title }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Section</th>
                                            <td>{{ $scholarship->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <td>{{ $scholarship->type }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Start Application Date</th>
                                            <td>{{ date('F j, Y', strtotime($scholarship->start_application_date)) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Deadline</th>
                                            <td>{{ date('F j, Y', strtotime($scholarship->deadline)) }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Funding</th>
                                            <td>{{ $scholarship->funding }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Country</th>
                                            <td>{{ $scholarship->country }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Details</th>
                                            <td>{{ $scholarship->details }}</td>
                                        </tr>
                                        @if ($scholarship->other_information != '')
                                            <tr>
                                                <th scope="row">Other Information</th>
                                                <td>
                                                    {{ $scholarship->other_information }}
                                                </td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td>Criteria</td>
                                            <td>
                                                <ol>
                                                    @foreach ($scholarship->criteria as $c)
                                                        <li>{{ $c->criteria }}</li>
                                                    @endforeach
                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Benefit</td>
                                            <td>
                                                <ol>
                                                    @foreach ($scholarship->benefit as $b)
                                                        <li>{{ $b->benefit }}</li>
                                                    @endforeach

                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Academic Requirements</td>
                                            <td>
                                                <ol>
                                                    @foreach ($scholarship->process as $p)
                                                        <li>{{ $p->process }}</li>
                                                    @endforeach

                                                </ol>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Application form</th>
                                            <td>{{ $scholarship->apply_form_link }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Official Website</th>
                                            <td>{{ $scholarship->official_website }}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                <img src="{{ asset("upload_images/$scholarship->image") }}"
                                                    alt="scholarship_image" style="width:200px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Action</th>
                                            <td>
                                                <a href="{{ route('scholarship.edit', $scholarship->id) }}"><span
                                                        class="badge badge-pill badge-warning">Update</span></a>
                                                <form action="{{ route('scholarship.destroy', $scholarship->id) }}"
                                                    method="post" style="display:inline;">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="badge badge-pill badge-danger"
                                                        onclick="return confirm('Are you want to delete {{ $scholarship->title }} ?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="float: right;" class="mb-4">
                                    <a href="{{ url('admin/scholarshipIndex') }}">
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
