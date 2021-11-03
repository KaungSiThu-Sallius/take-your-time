<?php

namespace App\Http\Controllers;

use App\Models\AllPost;
use App\Models\Competition;
use App\Models\Conference;
use App\Models\Course;
use App\Models\FeaturedOppotunity;
use App\Models\Fellowship;
use App\Models\Grant;
use App\Models\Job;
use App\Models\Master;
use App\Models\OppotunityPlace;
use App\Models\Other;
use App\Models\Phd;
use App\Models\Scholarship;
use App\Models\Undergraduate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featured_oppo = AllPost::orderBy('updated_at', 'DESC')->take(4)->get();
        $latest_scholar = Scholarship::orderBy('created_at', 'DESC')->take(3)->get();
        $grants = Grant::orderBy('created_at', 'DESC')->take(3)->get();
        $conferences = Conference::orderBy('created_at', 'DESC')->take(3)->get();
        $jobs = Job::orderBy('created_at', 'DESC')->take(3)->get();
        $others = Other::orderBy('created_at', 'DESC')->take(3)->get();
        $courses = Course::orderBy('created_at', 'DESC')->take(4)->get();
        return view('index', compact('featured_oppo', 'latest_scholar', 'grants', 'conferences', 'jobs', 'others', 'courses'));
    }

    public function regionFetch($oppotunity)
    {
        echo json_encode(OppotunityPlace::where('oppotunity', $oppotunity)->orderBy('place', 'ASC')->get());
    }

    public function search(Request $request)
    {
        if (strtolower($request->oppotunity) == 'undergraduate') {
            if ($request->place != "") {
                $data = Undergraduate::where('type', ucfirst($request->oppotunity))->where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Undergraduate::where('type', ucfirst($request->oppotunity))->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('scholarships.undergraduate_scholarships', compact('data'));
        } else if (strtolower($request->oppotunity) == 'master') {
            if ($request->place != "") {
                $data = Master::where('type', ucfirst($request->oppotunity))->where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Master::where('type', ucfirst($request->oppotunity))->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('scholarships.master_scholarships', compact('data'));
        } else if (strtolower($request->oppotunity) == 'phd') {
            if ($request->place != "") {
                $data = Phd::where('type', ucfirst($request->oppotunity))->where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Phd::where('type', ucfirst($request->oppotunity))->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('scholarships.phd_scholarships', compact('data'));
        } else if (strtolower($request->oppotunity) == 'fellowship') {
            if ($request->place != "") {
                $data = Fellowship::where('type', ucfirst($request->oppotunity))->where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Fellowship::where('type', ucfirst($request->oppotunity))->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('scholarships.fellowship', compact('data'));
        } else if (strtolower($request->oppotunity) == 'grant') {
            if ($request->place != "") {
                $data = Grant::where('country', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Grant::orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('grants.grants', compact('data'));
        } else if (strtolower($request->oppotunity) == 'conference') {
            if ($request->place != "") {
                $data = Conference::where('place', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Conference::orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('conferences.conferences', compact('data'));
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
        } else if ($request->oppotunity == 'competition') {
            if ($request->place != "") {
                $data = Competition::where('place', $request->place)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Competition::orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            return view('competitions.competitions', compact('data'));
        } else if ($request->oppotunity == 'seminar') {
            if ($request->place != "") {
                $data = Other::where('place', $request->place)->where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            } else {
                $data = Other::where('type', $request->oppotunity)->orderBy('id', 'DESC')->paginate(9);
            }
            $data->appends($request->all());
            if ($request->oppotunity == 'seminar') {
                return view('others.seminars', compact('data'));
            }
        } else {
            return redirect()->back();
        }
    }
}