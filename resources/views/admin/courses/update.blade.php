@extends('admin.layout.master')
@section('title')
<title>Update Grant</title>
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
    <li class="active">
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
    <div class="course create_scholar">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-9 col-12">
                    <form action="{{route('course.update',$course->id)}}" enctype="multipart/form-data" class="card" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h2 class="mb-4">Update Course <span style="font-size:14px; color:red">(<?php echo date("d M, Y") ?>)</span>
                            </h2>

                        </div>
                        @include('admin.alert')

                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="course_name" name="course_name" class="form-control" required value="{{$course->course_name}}">
                                        <label for="course_name" class="">Course Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="timetable" name="timetable" class="form-control" required value="{{$course->timetable}}">
                                        <label for="timetable">Timetable</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="taught_by" name="taught_by" class="form-control" required value="{{$course->taught_by}}">
                                        <label for="taught_by" class="">Taught By</label>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3 mt-4">

                                <div class="col-md-6 date">
                                    <label for="deadline">Course Application Deadline</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input type="date" id="deadline" class="form-control" name="deadline" value={{$course->deadline}}>
                                    </div>
                                </div>

                                <div class="col-md-6 date">
                                    <label for="start_course_date">Start Course Date</label>
                                    <div class="input-with-post-icon datepicker">
                                        <input  type="date" id="start_course_date" class="form-control" name="start_date" value={{$course->start_date}}>

                                    </div>
                                </div>
                            </div>


                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="course_duration" name="course_duration" class="form-control" required value={{$course->course_duration}}>
                                        <label for="course_duration" class="">Course Duration</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="apply_form_link" name="apply_form_link" class="form-control" required value={{$course->apply_form_link}}>
                                        <label for="apply_form_link">Application Link</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="place" name="place" class="form-control" required value={{$course->place}}>
                                        <label for="place" class="">Place</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="price" name="price" class="form-control" required value={{$course->price}}>
                                        <label for="price">Course Fee</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <div class="form-group detail_text">
                                        <h5>Details</h5>
                                        <textarea class="form-control rounded-0" id="detail" rows="3" name="detail" required>{{$course->details}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 funding">
                                    <h5>Course Type</h5>
                                    <div class="custom-control custom-radio funding">
                                        <input type="radio" class="custom-control-input" id="free_course" name="type" value="free_course" {{ $course->type == 'free_course' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="free_course">Free Course</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="paid_course" name="type" value="paid_course" {{ $course->type == 'paid_course' ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="paid_course">Paid Course</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-2">
                                <div class="col-12 image">
                                    <h5 class="mb-4">Course Image</h5>
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
                                      <img src="{{asset("post_images/$course->image")}}" alt="scholarship_image" style="width:200px; border: 1px solid black; " class="mt-4">
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

