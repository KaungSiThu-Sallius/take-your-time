<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllPost;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Like;
use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $today_posts = AllPost::whereDate('created_at', Carbon::today())->count();
        $today_courses = Course::whereDate('created_at', Carbon::today())->count();
        $today_posts_count = $today_courses + $today_posts;
        $all_posts_data = AllPost::orderBy('created_at', 'DESC')->with('like')->take(5)->get();
        $today_messages_count = Message::whereDate('created_at', Carbon::today())->count();
        $today_comments_count = Comment::whereDate('created_at', Carbon::today())->count();
        $today_likes_count = Like::whereDate('created_at', Carbon::today())->count();
        $recent_comments = Comment::with('post')->latest()->take(5)->get();
        $all_posts = AllPost::count();
        $all_courses = Course::count();
        $total_posts_count = $all_posts + $all_courses;
        $total_messages_count = Message::count();
        $total_comments_count = Comment::count();
        $total_likes_count = Like::count();
        return view('admin.dashboard.dashboard', compact('total_likes_count', 'total_comments_count', 'total_messages_count', 'recent_comments', 'total_posts_count', 'today_posts_count', 'all_posts_data', 'today_messages_count', 'today_comments_count', 'today_likes_count'));
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

    public function dashboardDetailTodayMessages()
    {
        $today_messages = Message::orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::today())->paginate(10);
        $all_messages = Message::orderBy('created_at', 'DESC')->paginate(10);
        $type = 'today_message';
        return view('admin.dashboard.dashboard_message', compact('today_messages', 'all_messages', 'type'));
    }

    public function dashboardDetailTotalMessages()
    {
        $all_messages = Message::orderBy('created_at', 'DESC')->paginate(10);
        $type = 'total_message';
        return view('admin.dashboard.dashboard_message', compact('all_messages', 'type'));
    }



    public function dashboardDetailTodayComments()
    {
        $today_comments = Comment::orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::today())->with('post')->paginate(10);
        $all_comments = Comment::orderBy('created_at', 'DESC')->with('post')->paginate(10);
        $type = 'today_comment';

        return view('admin.dashboard.dashboard_comment', compact('today_comments', 'all_comments', 'type'));
    }

    public function dashboardDetailTotalComments()
    {
        $all_comments = Comment::orderBy('created_at', 'DESC')->with('post')->paginate(10);
        $type = 'total_comment';
        return view('admin.dashboard.dashboard_comment', compact('all_comments', 'type'));
    }

    public function dashboardCommentsDelete($id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Comment Deleted Successfully');
    }

    public function dashboardLikesDelete($id)
    {
        Like::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Like Deleted Successfully');
    }

    public function dashboardDetailTodayLikes()
    {
        $today_likes = Like::orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::today())->with('post')->paginate(10);
        $all_likes = Like::orderBy('total_count', 'DESC')->with('post')->paginate(10);
        $type = 'today_like';
        return view('admin.dashboard.dashboard_like', compact('today_likes', 'all_likes', 'type'));
    }

    public function dashboardDetailTotalLikes()
    {
        $all_likes = Like::orderBy('total_count', 'DESC')->with('post')->paginate(10);
        $type = 'total_like';
        return view('admin.dashboard.dashboard_like', compact('all_likes', 'type'));
    }
}