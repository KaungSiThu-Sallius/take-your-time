@extends('admin.layout.master')
@section('title')
    <title>Dashboard</title>
@endsection
@section('nav_items')
    <li class="active">
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
    <li class="">
        <a href="{{ url('admin/message') }}">
            <img src="{{ asset('images/message.svg') }}" alt="messge" type="image/svg+xml" class="svg_icon" />
            <span>Message</span>
        </a>
    </li>


@endsection

@section('contents')
    <div class="container">
        @if ($type == 'today_like')
            <div class="row mt-5">
                <div class="offset-md-3 col-md-9">
                    <div class="heading mb-4">
                        <div class="row">
                            <div class="col-6">
                                <h2>
                                    Today Likes
                                </h2>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('admin/dashboard') }}">
                                    <div style='float:right;' class="button btn">Back</div>
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
                                    <th scope="col">Like Count</th>
                                    <th scope="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($today_likes as $l)
                                    <tr>
                                        <th scope="row">
                                            {{ ($today_likes->currentPage() - 1) * $today_likes->perPage() + $loop->iteration }}
                                        </th>
                                        <td>
                                            {{ $l->post->title }}
                                        </td>
                                        <td>

                                            {{ $l->total_count }}
                                        </td>
                                        <td>
                                            <?php
                                            $slug = $l->post->slug;
                                            $post_id = $l->post->post_id;
                                            ?>
                                            @if ($l->post->name == 'scholarship')
                                                <a href="{{ url("/scholarships/detail/$slug/$post_id") }}"
                                                    target="_blank"><span class="badge badge-pill badge-info">See
                                                        Post</span></a>
                                            @elseif ($l->post->name == 'grant')
                                                <a href="{{ url("/grants/detail/$slug/$post_id") }}"
                                                    target="_blank"><span class="badge badge-pill badge-info">See
                                                        Post</span></a>
                                            @elseif ($l->post->name == 'conference')
                                                <a href="{{ url("/conferences/detail/$slug/$post_id") }}"
                                                    target="_blank"><span class="badge badge-pill badge-info">See
                                                        Post</span></a>
                                            @elseif ($l->post->name == 'job')
                                                <a href="{{ url("/jobs/detail/$slug/$post_id") }}" target="_blank"><span
                                                        class="badge badge-pill badge-info">See Post</span></a>
                                            @elseif ($l->post->name == 'other')
                                                <a href="{{ url("/others/detail/$slug/$post_id") }}"
                                                    target="_blank"><span class="badge badge-pill badge-info">See
                                                        Post</span></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center justify-content-center">
                        {{ $today_likes->links() }}
                    </div>
                </div>
            </div>
        @endif

        <div class="row mt-5 mb-5">
            <div class="offset-md-3 col-md-9">
                <div class="heading mb-4">
                    <div class="row">
                        <div class="col-6">
                            <h2>Most Like Posts</h2>
                        </div>
                        @if ($type == 'total_like')
                            <div class="col-6">
                                <a href="{{ url('admin/dashboard') }}">
                                    <div style='float:right;' class="button btn">Back</div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="table-responsive data_table">
                    @include('admin.alert')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Like Count</th>
                                <th scope="col">Type</th>
                                <th scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_likes as $l)
                                <tr>
                                    <th scope="row">
                                        {{ ($all_likes->currentPage() - 1) * $all_likes->perPage() + $loop->iteration }}
                                    </th>
                                    <td>
                                        {{ $l->post->title }}
                                    </td>
                                    <td>
                                        {{ $l->total_count }}
                                    </td>
                                    <td>{{ ucfirst($l->post->name) }}</td>
                                    <td>
                                        <?php
                                        $slug = $l->post->slug;
                                        $post_id = $l->post->post_id;
                                        ?>
                                        @if ($l->post->name == 'scholarship')
                                            <a href="{{ url("/scholarships/detail/$slug/$post_id") }}"
                                                target="_blank"><span class="badge badge-pill badge-info">See
                                                    Post</span></a>
                                        @elseif ($l->post->name == 'grant')
                                            <a href="{{ url("/grants/detail/$slug/$post_id") }}" target="_blank"><span
                                                    class="badge badge-pill badge-info">See Post</span></a>
                                        @elseif ($l->post->name == 'conference')
                                            <a href="{{ url("/conferences/detail/$slug/$post_id") }}"
                                                target="_blank"><span class="badge badge-pill badge-info">See
                                                    Post</span></a>
                                        @elseif ($l->post->name == 'job')
                                            <a href="{{ url("/jobs/detail/$slug/$post_id") }}" target="_blank"><span
                                                    class="badge badge-pill badge-info">See Post</span></a>
                                        @elseif ($l->post->name == 'other')
                                            <a href="{{ url("/others/detail/$slug/$post_id") }}" target="_blank"><span
                                                    class="badge badge-pill badge-info">See Post</span></a>
                                        @endif
                                        <form action="{{ url('admin/comments', $l->id) }}" method="post"
                                            style="display:inline;">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="badge badge-pill badge-danger"
                                                onclick="return confirm('Are you want to delete this comment ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center justify-content-center">
                    {{ $all_likes->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection