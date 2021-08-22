@extends('admin.layout.master')
@section('title')
<title>Create Job</title>
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
    <li class="">
        <a href="{{url('admin/courseIndex')}}">
            <img src="{{asset('images/courses.svg')}}" alt="course" type="image/svg+xml" class="svg_icon" />
            <span>Course</span>
        </a>
    </li>
    <li class="active">
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
    <div class="job create_scholar">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-9 col-12">
                    <form action="{{route('job.store')}}" method="POST" enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-header">
                            <h2 class="mb-4">Create Job <span style="font-size:14px; color:red">(<? echo date("d M, Y") ?>)</span>
                            </h2>
                        </div>
                        @include('admin.alert')

                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="title" name="title" class="form-control" required>
                                        <label for="title" class="">Job Title</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="place" name="place" class="form-control" required>
                                        <label for="place">Place</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="organization" name="organization" class="form-control" required>
                                        <label for="organization" class="">Organization Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="salary" name="salary" class="form-control" required>
                                        <label for="salary" class="">Salary</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">

                                <div class="col-md-6">
                                    <div class="md-form input-with-post-icon datepicker">
                                        <input placeholder="Select date" type="date" id="deadline" class="form-control" name="deadline">
                                        <label for="deadline">Application Deadline</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form input-with-post-icon datepicker">
                                        <input placeholder="Select date" type="date" id="start_date" class="form-control" name="start_date">
                                        <label for="start_date">Start Job Date</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="job_duration" name="job_duration" class="form-control" required>
                                        <label for="job_duration" class="">Job Duration</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="apply_form_link" name="apply_form_link" class="form-control" required>
                                        <label for="apply_form_link">Source Link</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group detail_text">
                                        <h5>Details</h5>
                                        <textarea class="form-control rounded-0" id="detail" rows="3" name="detail" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group other_text">
                                        <h5>Other Information</h5>
                                        <textarea class="form-control rounded-0" id="other_information" rows="3" name="other_information"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 funding">
                                    <h5>Type</h5>
                                    <div class="custom-control custom-radio funding">
                                        <input type="radio" class="custom-control-input" id="part_time_job" name="type" value="part_time_job">
                                        <label class="custom-control-label" for="part_time_job">Part-Time Job</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="full_time_job" name="type" value="full_time_job">
                                        <label class="custom-control-label" for="full_time_job">Full-Time Job</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="internship" name="type" value="internship">
                                        <label class="custom-control-label" for="internship">Internship</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-4 criteria">
                                <div class="col-12">
                                    <h5>Eligibility Criteria & Qualification</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria1" name="criteria[]" class="form-control">
                                        <label for="criteria1">Criteria 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria2" name="criteria[]" class="form-control">
                                        <label for="criteria2">Criteria 2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria3" name="criteria[]" class="form-control">
                                        <label for="criteria3">Criteria 3</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria4" name="criteria[]" class="form-control">
                                        <label for="criteria4">Criteria 4</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria5" name="criteria[]" class="form-control">
                                        <label for="criteria5">Criteria 5</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria6" name="criteria[]" class="form-control">
                                        <label for="criteria6">Criteria 6</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria7" name="criteria[]" class="form-control" >
                                        <label for="criteria7">Criteria 7</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria8" name="criteria[]" class="form-control">
                                        <label for="criteria8">Criteria 8</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria9" name="criteria[]" class="form-control">
                                        <label for="criteria9">Criteria 9</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="criteria10" name="criteria[]" class="form-control">
                                        <label for="criteria10">Criteria 10</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2 benefit">
                                <div class="col-12">
                                    <h5>Benefits</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit1" name="benefit[]" class="form-control">
                                        <label for="benefit1">Benefit 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit2" name="benefit[]" class="form-control">
                                        <label for="benefit2">Benefit 2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit3" name="benefit[]" class="form-control">
                                        <label for="benefit3">Benefit 3</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit4" name="benefit[]" class="form-control">
                                        <label for="benefit3">Benefit 4</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit5" name="benefit[]" class="form-control">
                                        <label for="benefit5">Benefit 5</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit6" name="benefit[]" class="form-control">
                                        <label for="benefit6">Benefit 6</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit7" name="benefit[]" class="form-control">
                                        <label for="benefit7">Benefit 7</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="benefit8" name="benefit[]" class="form-control">
                                        <label for="benefit8">Benefit 8</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2 application_process">
                                <div class="col-12">
                                    <h5>Required Documents</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document1" name="document[]" class="form-control">
                                        <label for="document1">Document 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document2" name="document[]" class="form-control">
                                        <label for="document2">Document 2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document3" name="document[]" class="form-control">
                                        <label for="document">Document 3</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document4" name="document[]" class="form-control">
                                        <label for="document4">Document 4</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document5" name="document[]" class="form-control">
                                        <label for="document5">Document 5</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document6" name="document[]" class="form-control">
                                        <label for="document6">Document 6</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document7" name="document[]" class="form-control">
                                        <label for="document7">Document 7</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="document8" name="document[]" class="form-control">
                                        <label for="document8">Document 8</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12 image">
                                    <h5 class="mb-4">Job Image</h5>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile01"
                                            aria-describedby="inputGroupFileAddon01" name="image" required>
                                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                      </div>
                                </div>
                            </div>

                            <div class="row" style="float: right;">
                                <div class="col-12 sub_btn">
                                    <input type="submit" class="button btn" value="Create">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection

