@extends('admin.layout.master')
@section('title')
    <title>Dashboard</title>
@endsection
@section('nav_items')
    <li class="active">
        <a href="{{ url('admin/dashboard') }}">
            <img src="../images/dashboard.svg" alt="dashboard" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="">
        <a href="{{ url('admin/scholarshipIndex') }}">
            <img src="../images/scholar.svg" alt="scholarship" type="image/svg+xml" class="svg_icon icon_sidebar" />
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
                            <a href="{{ url('admin/dashboard/todayPosts') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $today_posts_count }}</h3>
                                    <h4>Today Posts</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('admin/dashboard/todayMessages') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $today_messages_count }}</h3>
                                    <h4>Today Messages</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="offset-md-3 col-md-4">
                            <a href="{{ url('admin/dashboard/todayComments') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $today_comments_count }}</h3>
                                    <h4>Today Comments</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('admin/dashboard/todayLikes') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $today_likes_count }}</h3>
                                    <h4>Today Likes</h4>
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
                                    <div class="col-12">
                                        <h3>Recent Posts</h3>
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
                                            <th scope="col">Like Count</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_posts_data as $d)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <th>{{ $d->title }}</th>
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
                                                    @if (count($d->like) == 0)
                                                        0
                                                    @else
                                                        {{ $d->like[0]->total_count }}
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($d->name == 'scholarship')
                                                        <a href="{{ route('scholarship.show', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-info">Details</span></a>
                                                        <a href="{{ route('scholarship.edit', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-warning">Update</span></a>
                                                    @elseif ($d->name == 'grant')
                                                        <a href="{{ route('grant.show', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-info">Details</span></a>
                                                        <a href="{{ route('grant.edit', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-warning">Update</span></a>
                                                    @elseif ($d->name == 'conference')
                                                        <a href="{{ route('conference.show', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-info">Details</span></a>
                                                        <a href="{{ route('conference.edit', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-warning">Update</span></a>
                                                    @elseif ($d->name == 'job')
                                                        <a href="{{ route('job.show', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-info">Details</span></a>
                                                        <a href="{{ route('job.edit', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-warning">Update</span></a>
                                                    @elseif ($d->name == 'other')
                                                        <a href="{{ route('other.show', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-info">Details</span></a>
                                                        <a href="{{ route('other.edit', $d->post_id) }}"><span
                                                                class="badge badge-pill badge-warning">Update</span></a>
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
                                    <div class="col-12">
                                        <h3>Recent Comments</h3>
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
                                            <th scope="col">Title</th>
                                            <th scope="col">Comment</th>
                                            <th scope="col">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recent_comments as $c)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $c->name }}</td>
                                                <td>
                                                    {{ $c->post->title }}
                                                </td>
                                                <td>
                                                    {{ $c->comment }}
                                                </td>
                                                <td>
                                                    <?php
                                                    $slug = $c->post->slug;
                                                    $post_id = $c->post->post_id;
                                                    ?>
                                                    @if ($c->post->name == 'scholarship')
                                                        <a href="{{ url("/scholarships/detail/$slug/$post_id") }}"
                                                            target="_blank"><span class="badge badge-pill badge-info">See
                                                                Post</span></a>
                                                    @elseif ($c->post->name == 'grant')
                                                        <a href="{{ url("/grants/detail/$slug/$post_id") }}"
                                                            target="_blank"><span class="badge badge-pill badge-info">See
                                                                Post</span></a>
                                                    @elseif ($c->post->name == 'conference')
                                                        <a href="{{ url("/conferences/detail/$slug/$post_id") }}"
                                                            target="_blank"><span class="badge badge-pill badge-info">See
                                                                Post</span></a>
                                                    @elseif ($c->post->name == 'job')
                                                        <a href="{{ url("/jobs/detail/$slug/$post_id") }}"
                                                            target="_blank"><span class="badge badge-pill badge-info">See
                                                                Post</span></a>
                                                    @elseif ($c->post->name == 'other')
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



                        </div>

                    </div>
                </div>

                <div class="dashboard_card total_data  mb-5">
                    <div class="row mt-5">
                        <div class="offset-md-3 col-md-4">
                            <a href="{{ url('admin/dashboard/totalPosts') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $total_posts_count }}</h3>
                                    <h4>Total Posts</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ url('admin/dashboard/totalMessages') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $total_messages_count }}</h3>
                                    <h4>Total Messages</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <div class="offset-md-3 col-md-4">
                            <a href="{{ url('admin/dashboard/totalComments') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $total_comments_count }}</h3>
                                    <h4>Total Comments</h4>
                                    <i class="fa fa-arrow-circle-right detail_icon" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('admin/dashboard/totalLikes') }}">
                                <div class="card_info text-left">
                                    <h3 class="count_number">{{ $total_likes_count }}</h3>
                                    <h4>Total Likes</h4>
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
