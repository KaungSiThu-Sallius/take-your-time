<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'HomeController@index');
Route::get('regionFetch/{oppotunity}', 'HomeController@regionFetch')->name('region.fetch');
Route::get('search', 'HomeController@search');

// About
Route::get('/about', function () {
    return view('about');
});
Route::post('/sendMessage', 'MessageController@sendMessage');


// Scholarships
Route::prefix('scholarships')->namespace('Scholarship')->group(function () {
    Route::get('/', 'ScholarshipController@allScholarship');
    Route::get('undergraduate', 'UndergraduateController@index');
    Route::get('master', 'MasterController@index');
    Route::get('phd', 'PhDController@index');
    Route::get('fellowship', 'FellowshipController@index');
    Route::get('alumni', 'ScholarshipController@alumni');
    Route::get('detail/{slug}/{id}', 'ScholarshipController@detail');
    Route::get('/post/like/{id}', 'ScholarshipController@like');
    Route::post('/post/comment', 'ScholarshipController@comment');
});

// Grants
Route::get('/grants', 'GrantController@allGrant');
Route::get('grants/detail/{slug}/{id}', 'GrantController@detail');
Route::get('grants/post/like/{id}', 'GrantController@like');
Route::post('grants/post/comment', 'GrantController@comment');

// Competitions
Route::get('/competitions', 'CompetitionController@allCompetitions');
Route::get('competitions/detail/{slug}/{id}', 'CompetitionController@detail');
Route::get('competitions/post/like/{id}', 'CompetitionController@like');
Route::post('competitions/post/comment', 'CompetitionController@comment');

// Conferences
Route::get('/conferences', 'ConferenceController@allConference');
Route::get('conferences/detail/{slug}/{id}', 'ConferenceController@detail');
Route::get('conferences/post/like/{id}', 'ConferenceController@like');
Route::post('conferences/post/comment', 'ConferenceController@comment');

// Courses
Route::prefix('courses')->namespace('Course')->group(function () {
    Route::get('/', 'CourseController@allCourse');
    Route::get('/freeCourses', 'FreeCourseController@index');
    Route::get('/paidCourses', 'PaidCourseController@index');
    Route::get('/academicTeam', 'CourseController@team');
    Route::get('/detail/{slug}/{id}', 'CourseController@detail');
});

// Jobs
Route::prefix('jobs')->namespace('Job')->group(function () {
    Route::get('/', 'JobController@allJob');
    Route::get('/internships', 'InternshipController@index');
    Route::get('/partTimeJobs', 'PartTimeController@index');
    Route::get('/fullTimeJobs', 'FullTimeController@index');
    Route::get('/detail/{slug}/{id}', 'JobController@detail');
    Route::get('/post/like/{id}', 'JobController@like');
    Route::post('/post/comment', 'JobController@comment');
});

// Others
Route::prefix('others')->namespace('Other')->group(function () {
    Route::get('/', 'OtherController@allOther');
    Route::get('/seminars', 'SeminarController@index');
    Route::get('/detail/{slug}/{id}', 'OtherController@detail');
    Route::get('/post/like/{id}', 'OtherController@like');
    Route::post('/post/comment', 'OtherController@comment');
});



// Authentication
Route::get('/parallelWorld/login', 'Admin\AuthController@loginForm');
Route::post('/admin/login', 'Admin\AuthController@login');

// Admin
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('logout', 'Admin\AuthController@logout');

    // Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');
    Route::get('dashboard/totalPosts', 'Admin\DashboardController@dashboardDetailAllPosts');
    Route::get('dashboard/todayPosts', 'Admin\DashboardController@dashboardDetailTodayPosts');
    Route::get('dashboard/todayMessages', 'Admin\DashboardController@dashboardDetailTodayMessages');
    Route::get('dashboard/totalMessages', 'Admin\DashboardController@dashboardDetailTotalMessages');
    Route::get('dashboard/todayComments', 'Admin\DashboardController@dashboardDetailTodayComments');
    Route::get('dashboard/totalComments', 'Admin\DashboardController@dashboardDetailTotalComments');
    Route::get('dashboard/todayLikes', 'Admin\DashboardController@dashboardDetailTodayLikes');
    Route::get('dashboard/totalLikes', 'Admin\DashboardController@dashboardDetailTotalLikes');

    // Scholarship
    Route::get('scholarshipIndex', 'Scholarship\ScholarshipController@allData');
    Route::get('scholarshipIndex/search', 'Scholarship\ScholarshipController@searchData');
    Route::resource('scholarship', 'Scholarship\ScholarshipController');

    // Grant
    Route::get('grantIndex', 'GrantController@allData');
    Route::get('grantIndex/search', 'GrantController@searchData');
    Route::resource('grant', 'GrantController');

    // Competition
    Route::get('competitionIndex', 'CompetitionController@allData');
    Route::get('competitionIndex/search', 'CompetitionController@searchData');
    Route::resource('competition', 'CompetitionController');

    // Conference
    Route::get('conferenceIndex', 'ConferenceController@allData');
    Route::get('conferenceIndex/search', 'ConferenceController@searchData');
    Route::resource('conference', 'ConferenceController');

    // Course
    Route::get('courseIndex', 'Course\CourseController@allData');
    Route::get('courseIndex/search', 'Course\CourseController@searchData');
    Route::resource('course', 'Course\CourseController');

    // Job
    Route::get('jobIndex', 'Job\JobController@allData');
    Route::get('jobIndex/search', 'Job\JobController@searchData');
    Route::resource('job', 'Job\JobController');

    // Other
    Route::get('otherIndex', 'Other\OtherController@allData');
    Route::get('otherIndex/search', 'Other\OtherController@searchData');
    Route::resource('other', 'Other\OtherController');

    // Message
    Route::get('message', 'MessageController@index');
    Route::delete('messages/{id}', 'MessageController@destroy');

    // Comment
    Route::delete('/comments/{id}', 'Admin\DashboardController@dashboardCommentsDelete');
    Route::delete('/likes/{id}', 'Admin\DashboardController@dashboardLikesDelete');
});