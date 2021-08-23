<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllPost;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $all_posts = AllPost::count();
        $all_courses = Course::count();
        $total_posts_count = $all_posts + $all_courses;
        $today_posts = AllPost::whereDate('created_at', Carbon::today())->count();
        $today_courses = Course::whereDate('created_at', Carbon::today())->count();
        $today_posts_count = $today_courses + $today_posts;
        $all_posts_data = AllPost::orderBy('created_at', 'DESC')->take(5)->get();
        return view('admin.dashboard.dashboard', compact('total_posts_count', 'today_posts_count', 'all_posts_data'));
    }

    public function dashboardDetailAllPosts()
    {
        $data = AllPost::orderBy('created_at', 'DESC')->paginate(10);
        $course = Course::orderBy('created_at', 'DESC')->paginate(10);
        $type = 'all_posts';
        return view('admin.dashboard.dashboard_detail', compact('data', 'course', 'type'));
    }

    public function dashboardDetailTodayPosts()
    {
        $data = AllPost::orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::today())->paginate(10);
        $course = Course::orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::today())->paginate(10);
        $type = 'today_posts';
        return view('admin.dashboard.dashboard_detail', compact('data', 'course', 'type'));
    }
}