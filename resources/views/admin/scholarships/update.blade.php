@extends('admin.layout.master')
@section('title')
    <title>Update Scholarship</title>
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
    <div class="create_scholar">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-9 col-12">
                    <form action="{{ route('scholarship.update', $scholarship->id) }}" enctype="multipart/form-data"
                        class="card" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h2 class="mb-4">Update Scholarship <span
                                    style="font-size:14px; color:red">(<?php echo date('d M, Y'); ?>)</span>
                            </h2>

                        </div>
                        @include('admin.alert')

                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="title" name="title" class="form-control" required
                                            value="{{ $scholarship->title }}">
                                        <label for="title" class="">Title</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="country" name="country" class="form-control" required
                                            value="{{ $scholarship->country }}">
                                        <label for="country">Country</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="given_by" name="given_by" class="form-control" required
                                            value="{{ $scholarship->given_by }}">
                                        <label for="given_by" class="">Given By</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="source" name="source" class="form-control" required
                                            value="{{ $scholarship->official_website }}">
                                        <label for="source" class="">Source Link</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="apply_link" name="apply_link" class="form-control" required
                                            value="{{ $scholarship->apply_form_link }}">
                                        <label for="apply_link">Application Link</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 mt-4">
                                <div class="col-md-6 date">
                                    <label for="start_application_date">Start Application Date</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input type="date" id="start_application_date" class="form-control"
                                            name="start_application_date"
                                            value={{ $scholarship->start_application_date }}>

                                    </div>
                                </div>

                                <div class="col-md-6 date">
                                    <label for="deadline">Deadline</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input type="date" id="deadline" class="form-control" name="deadline"
                                            value={{ $scholarship->deadline }}>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group detail_text">
                                        <h5>Details</h5>
                                        <textarea class="form-control rounded-0" id="detail" rows="3" name="detail"
                                            required>{{ $scholarship->details }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group other_text">
                                        <h5>Other Information</h5>
                                        <textarea class="form-control rounded-0" id="other_information" rows="3"
                                            name="other_information">{{ $scholarship->other_information }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 type_checkbox">
                                    <h5>Type</h5>
                                    <?php
                                    $types = explode(',', $scholarship->type);
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="undergraduate" name="type[]"
                                            value="Undergraduate" @foreach ($types as $t)
                                        {{ $t == 'Undergraduate' ? 'checked' : '' }}
                                        @endforeach
                                        >
                                        <label class="custom-control-label" for="undergraduate">Undergraduate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="master" name="type[]"
                                            value="Master" @foreach ($types as $t)
                                        {{ $t == 'Master' ? 'checked' : '' }}
                                        @endforeach>
                                        <label class="custom-control-label" for="master">Master</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="phd" name="type[]"
                                            value="Phd" @foreach ($types as $t)
                                        {{ $t == 'Phd' ? 'checked' : '' }}
                                        @endforeach>
                                        <label class="custom-control-label" for="phd">PhD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fellowship" name="type[]"
                                            value="Fellowship" @foreach ($types as $t)
                                        {{ $t == 'Fellowship' ? 'checked' : '' }}
                                        @endforeach>
                                        <label class="custom-control-label" for="fellowship">Fellowship</label>
                                    </div>
                                </div>
                                <div class="col-md-6 funding">
                                    <h5>Funding</h5>
                                    <div class="custom-control custom-radio funding">
                                        <input type="radio" class="custom-control-input" id="fully_funded" name="funding"
                                            value="Fully-Funded"
                                            {{ $scholarship->funding == 'Fully-Funded' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="fully_funded">Fully-Funded</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="partial_funded" name="funding"
                                            value="Partial-Funded"
                                            {{ $scholarship->funding == 'Partial-Funded' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="partial_funded">Partial-Funded</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="self_funded" name="funding"
                                            value="Self-Funded"
                                            {{ $scholarship->funding == 'Self-Funded' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="self_funded">Self-Funded</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 criteria">
                                <div class="col-12 mb-4">
                                    <h5>Eligibility Criteria</h5>
                                </div>
                                @foreach ($scholarship->criteria as $c)
                                    <div class="col-md-6">
                                        <label for="criteria{{ $loop->iteration }}">Criteria
                                            {{ $loop->iteration }}</label>
                                        <textarea class="form-control rounded-0 mb-3" id="{{ $loop->iteration }}"
                                            rows="3" name="criteria[]">{{ $c->criteria }}</textarea>
                                        {{-- <input type="text" id="criteria{{$loop->iteration}}" name="criteria[]" class="form-control" value="{{$c->criteria}}"> --}}
                                    </div>
                                @endforeach
                                <div class="col-md-6">
                                    <label for="criteria11">New Criteria</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="criteria[]"></textarea>

                                </div>
                                <div class="col-md-6">
                                    <label for="criteria12">New Criteria</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="criteria[]"></textarea>

                                </div>
                            </div>

                            <div class="row mb-2 benefit">
                                <div class="col-12 mb-4">
                                    <h5>Benefits</h5>
                                </div>
                                @foreach ($scholarship->benefit as $b)
                                    <div class="col-md-6">
                                        <label for="benefit{{ $loop->iteration }}">Benefit
                                            {{ $loop->iteration }}</label>
                                        <textarea class="form-control rounded-0 mb-3" id="{{ $loop->iteration }}"
                                            rows="3" name="benefit[]">{{ $b->benefit }}</textarea>

                                    </div>
                                @endforeach
                                <div class="col-md-6">
                                    <label for="benefit9">New Benefit</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="benefit[]"></textarea>

                                </div>
                                <div class="col-md-6">
                                    <label for="benefit10">New Benefit</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="benefit[]"></textarea>

                                </div>
                            </div>

                            <div class="row mb-2 application_process">
                                <div class="col-12 mb-4">
                                    <h5>Application Process</h5>
                                </div>
                                @foreach ($scholarship->process as $p)
                                    <div class="col-md-6">
                                        <label for="process{{ $loop->iteration }}">Process
                                            {{ $loop->iteration }}</label>
                                        <textarea class="form-control rounded-0 mb-3" id="{{ $loop->iteration }}"
                                            rows="3" name="process[]">{{ $p->process }}</textarea>

                                    </div>
                                @endforeach
                                <div class="col-md-6">
                                    <label for="process9">New Process</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="process[]"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="process10">New Process</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="process[]"></textarea>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12 image">
                                    <h5 class="mb-4">Scholarship Image</h5>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                aria-describedby="inputGroupFileAddon01" name="image">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                    </div>
                                    <img src="{{ asset("post_images/$scholarship->image") }}" alt="scholarship_image"
                                        style="width:200px; border: 1px solid black; " class="mt-4">
                                </div>
                            </div>

                            <div class="row" style="float: right;">
                                <div class="col-12 sub_btn">
                                    <input type="submit" class="button btn" value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
