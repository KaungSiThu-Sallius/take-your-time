@extends('admin.layout.master')
@section('title')
<title>Update Job</title>
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
    <li class="">
        <a href="{{url('admin/message')}}">
            <img src="{{asset('images/message.svg')}}" alt="messge" type="image/svg+xml" class="svg_icon" />
            <span>Message</span>
        </a>
    </li>

@endsection

@section('contents')
    <div class="create_scholar">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-9 col-12">
                    <form action="{{route('job.update',$job->id)}}" enctype="multipart/form-data" class="card" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h2 class="mb-4">Update Job <span style="font-size:14px; color:red">(<? echo date("d M, Y") ?>)</span>
                            </h2>

                        </div>
                        @include('admin.alert')

                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="title" name="title" class="form-control" required value="{{$job->title}}">
                                        <label for="title" class="">Job Title</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="place" name="place" class="form-control" required value="{{$job->place}}">
                                        <label for="place">Place</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="organization" name="organization" class="form-control" required value="{{$job->organization_name}}">
                                        <label for="organization" class="">Organization Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="salary" name="salary" class="form-control" required value="{{$job->salary}}"">
                                        <label for="salary" class="">Salary</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">

                                <div class="col-md-6 date">
                                    <label for="deadline">Application Deadline</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input type="date" id="deadline" class="form-control" name="deadline" value={{$job->deadline}}>
                                    </div>
                                </div>
                                <div class="col-md-6 date">
                                    <label for="start_application_date">Start Job Date</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input  type="date" id="start_date" class="form-control" name="start_date" value={{$job->start_date}}>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="job_duration" name="job_duration" class="form-control" required value="{{$job->job_duration}}">
                                        <label for="job_duration" class="">Job Duration</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="apply_form_link" name="apply_form_link" class="form-control" required value="{{$job->apply_form_link}}">
                                        <label for="apply_form_link">Source Link</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group detail_text">
                                        <h5>Details</h5>
                                        <textarea class="form-control rounded-0" id="detail" rows="3" name="detail" required>{{$job->details}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group other_text">
                                        <h5>Other Information</h5>
                                        <textarea class="form-control rounded-0" id="other_information" rows="3" name="other_information">{{$job->other_information}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12 funding">
                                    <h5>Type</h5>
                                    <div class="custom-control custom-radio funding">
                                        <input type="radio" class="custom-control-input" id="part_time_job" name="type" value="part_time_job" {{ $job->type == 'part_time_job' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="part_time_job">Part-Time Job</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="full_time_job" name="type" value="full_time_job" {{ $job->type == 'full_time_job' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="full_time_job">Full-Time Job</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="internship" name="type" value="internship" {{ $job->type == 'internship' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="internship">Internship</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 criteria">
                                <div class="col-12 mb-4">
                                    <h5>Eligibility Criteria & Qualification</h5>
                                </div>
                                @foreach ($job->criteria as $c)
                                    <div class="col-md-6">
                                            <label for="criteria{{$loop->iteration}}">Criteria {{$loop->iteration}}</label>
                                            <textarea class="form-control rounded-0 mb-3" id="{{$loop->iteration}}" rows="3" name="criteria[]">{{$c->criteria}}</textarea>
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
                                @foreach ($job->benefit as $b)
                                    <div class="col-md-6">
                                        <label for="benefit{{$loop->iteration}}">Benefit {{$loop->iteration}}</label>
                                        <textarea class="form-control rounded-0 mb-3" id="{{$loop->iteration}}" rows="3" name="benefit[]">{{$b->benefit}}</textarea>

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
                                    <h5>Required Documents</h5>
                                </div>
                                @foreach ($job->document as $d)
                                <div class="col-md-6">
                                    <label for="document{{$loop->iteration}}">Document {{$loop->iteration}}</label>
                                    <textarea class="form-control rounded-0 mb-3" id="{{$loop->iteration}}" rows="3" name="document[]">{{$d->document}}</textarea>

                                </div>
                                @endforeach
                                <div class="col-md-6">
                                    <label for="document9">New Document</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="document[]"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="document10">New Document</label>
                                    <textarea class="form-control rounded-0 mb-3" rows="3" name="document[]"></textarea>
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
                                            aria-describedby="inputGroupFileAddon01" name="image">
                                          <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                      </div>
                                      <img src="{{asset("images_database/$job->image")}}" alt="job_image" style="width:200px; border: 1px solid black; " class="mt-4">
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

