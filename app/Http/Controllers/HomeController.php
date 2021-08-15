<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Course;
use App\Models\FeaturedOppotunity;
use App\Models\Grant;
use App\Models\Job;
use App\Models\OppotunityPlace;
use App\Models\Other;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_oppo = FeaturedOppotunity::orderBy('updated_at', 'DESC')->paginate(4);
        $latest_scholar = Scholarship::orderBy('created_at', 'DESC')->paginate(3);
        $grants = Grant::orderBy('created_at', 'DESC')->paginate(3);
        $conferences = Conference::orderBy('created_at', 'DESC')->paginate(3);
        $jobs = Job::orderBy('created_at', 'DESC')->paginate(3);
        $others = Other::orderBy('created_at', 'DESC')->paginate(3);
        $courses = Course::orderBy('created_at', 'DESC')->paginate(4);
        return view('index', compact('featured_oppo', 'latest_scholar', 'grants', 'conferences', 'jobs', 'others', 'courses'));
    }

    public function regionFetch($oppotunity)
    {
        echo json_encode(OppotunityPlace::where('oppotunity', $oppotunity)->orderBy('place', 'ASC')->get());
    }

    public function search(Request $request)
    {
        if ($request->oppotunity == 'undergraduate' or $request->oppotunity == 'master' or $request->oppotunity == 'phd' or $request->oppotunity == 'fellowship') {
            if ($request->place != "") {
                $data = Scholarship::where('type', $request->oppotunity)->where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Scholarship::where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            if ($request->oppotunity == 'undergraduate') {
                return view('scholarships.undergraduate_scholarships', compact('data'));
            } else if ($request->oppotunity == 'master') {
                return view('scholarships.master_scholarships', compact('data'));
            } else if ($request->oppotunity == 'phd') {
                return view('scholarships.phd_scholarships', compact('data'));
            } else {
                return view('scholarships.fellowship', compact('data'));
            }
        } else if ($request->oppotunity == 'grant') {
            if ($request->place != "") {
                $data = Grant::where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Grant::orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('grants', compact('data'));
        } else if ($request->oppotunity == 'conference') {
            if ($request->place != "") {
                $data = Conference::where('place', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Conference::orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('conferences', compact('data'));
        } else if ($request->oppotunity == 'free_course' or $request->oppotunity == 'paid_course') {
            if ($request->place != "") {
                $data = Course::where('place', $request->place)->where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(8);
            } else {
                $data = Course::where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(8);
            }
            $data->appends($request->all());
            if ($request->oppotunity == 'free_course') {
                return view('courses.freeCourses', compact('data'));
            } else {
                return view('courses.paidCourses', compact('data'));
            }
        } else if ($request->oppotunity == 'internship' or $request->oppotunity == 'part_time_job' or $request->oppotunity == 'full_time_job') {
            if ($request->place != "") {
                $data = Job::where('place', $request->place)->where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Job::where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            if ($request->oppotunity == 'internship') {
                return view('jobs.internships', compact('data'));
            } else if ($request->oppotunity == 'part_time_job') {
                return view('jobs.partTime', compact('data'));
            } else {
                return view('jobs.fullTime', compact('data'));
            }
        } else if ($request->oppotunity == 'seminar' or $request->oppotunity == 'competition') {
            if ($request->place != "") {
                $data = Other::where('place', $request->place)->where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Other::where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            if ($request->oppotunity == 'seminar') {
                return view('others.seminars', compact('data'));
            } else {
                return view('others.competitions', compact('data'));
            }
        } else {
            return redirect()->back();
        }
    }
}