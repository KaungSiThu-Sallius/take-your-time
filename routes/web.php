<?php

use App\Http\Controllers\Scholarship\ScholarshipController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', 'HomeController@index');
Route::get('regionFetch/{oppotunity}', 'HomeController@regionFetch')->name('region.fetch');
Route::get('search', 'HomeController@search');

// About
Route::get('/about', function () {
    return view('about');
});

// Scholarships
Route::prefix('scholarships')->namespace('Scholarship')->group(function () {
    Route::get('/', 'ScholarshipController@allScholarship');
    Route::get('undergraduate', 'UndergraduateController@index');
    Route::get('master', 'MasterController@index');
    Route::get('phd', 'PhDController@index');
    Route::get('fellowship', 'FellowshipController@index');
    Route::get('detail/{slug}/{id}', 'ScholarshipController@detail');
});

// Grants
Route::get('/grants', 'GrantController@allGrant');
Route::get('grants/detail/{slug}/{id}', 'GrantController@detail');

// Conferences
Route::get('/conferences', 'ConferenceController@allConference');
Route::get('conferences/detail/{slug}/{id}', 'ConferenceController@detail');

// Courses
Route::prefix('courses')->namespace('Course')->group(function () {
    Route::get('/', 'CourseController@allCourse');
    Route::get('/freeCourses', 'FreeCourseController@index');
    Route::get('/paidCourses', 'PaidCourseController@index');
    Route::get('/detail/{slug}/{id}', 'CourseController@detail');
});

// Jobs
Route::prefix('jobs')->namespace('Job')->group(function () {
    Route::get('/', 'JobController@index');
    Route::get('/internships', 'InternshipController@index');
    Route::get('/partTimeJobs', 'PartTimeController@index');
    Route::get('/fullTimeJobs', 'FullTimeController@index');
});

// Others
Route::prefix('others')->namespace('Other')->group(function () {
    Route::get('/', 'OtherController@index');
    Route::get('/seminars', 'SeminarController@index');
    Route::get('/competitions', 'CompetitionController@index');
});

// Authentication
Route::get('/admin/login', 'Admin\AuthController@loginForm');
Route::post('/admin/login', 'Admin\AuthController@login');

// Admin
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', 'Admin\DashboardController@index');
    Route::get('scholarshipIndex', 'Scholarship\ScholarshipController@allData');
    Route::get('scholarshipIndex/search', 'Scholarship\ScholarshipController@searchData');
    Route::resource('scholarship', 'Scholarship\ScholarshipController');
    Route::get('grantIndex', 'GrantController@allData');
    Route::get('grantIndex/search', 'GrantController@searchData');
    Route::resource('grant', 'GrantController');
    Route::get('conferenceIndex', 'ConferenceController@allData');
    Route::get('conferenceIndex/search', 'ConferenceController@searchData');
    Route::resource('conference', 'ConferenceController');
    Route::get('courseIndex', 'Course\CourseController@allData');
    Route::get('courseIndex/search', 'Course\CourseController@searchData');
    Route::resource('course', 'Course\CourseController');
});