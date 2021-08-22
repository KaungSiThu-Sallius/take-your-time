<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\OppotunityPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function allCourse()
    {
        $courses = Course::orderBy('id', 'DESC')->paginate(8);
        return view('courses.courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
        ], [
            'image.mimes' => 'Please choose image',
        ]);

        $course_name = $request->course_name;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $place = $request->place;
        $detail = $request->detail;
        $taught_by = $request->taught_by;
        $timetable = $request->timetable;
        $price = $request->price;
        $apply_form_link = $request->apply_form_link;
        $course_duration = $request->course_duration;
        $type = $request->type;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        $image->storeAs('images_database', $img_name);

        $course = Course::create([
            'slug' => Str::slug($course_name),
            'course_name' => $course_name,
            'image' => $img_name,
            'start_date' => $start_date,
            'deadline' => $deadline,
            'place' => $place,
            'timetable' => $timetable,
            'taught_by' => $taught_by,
            'details' => $detail,
            'price' => $price,
            'apply_form_link' => $apply_form_link,
            'course_duration' => $course_duration,
            'type' => $type,
        ]);

        $course_id = $course->id;
        OppotunityPlace::create([
            'post_id' => $course_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);

        return redirect()->back()->with('success', 'Course Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::where('id', $id)->first();
        return view('admin.courses.detail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::where('id', $id)->first();
        return view('admin.courses.update', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old_image = Course::where('id', $id)->first()->image;
        if (request()->file('image') == "") {
            $img_name = $old_image;
        } else {
            $image = request()->file('image');
            $img_name = uniqid() . $image->getClientOriginalName();
            Storage::disk('images_database')->delete([$old_image]);
            $image->storeAs('images_database', $img_name);
        }

        $course_name = $request->course_name;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $place = $request->place;
        $detail = $request->detail;
        $taught_by = $request->taught_by;
        $timetable = $request->timetable;
        $price = $request->price;
        $apply_form_link = $request->apply_form_link;
        $course_duration = $request->course_duration;
        $type = $request->type;
        Course::where('id', $id)->update([
            'slug' => Str::slug($course_name),
            'course_name' => $course_name,
            'image' => $img_name,
            'start_date' => $start_date,
            'deadline' => $deadline,
            'place' => $place,
            'timetable' => $timetable,
            'taught_by' => $taught_by,
            'details' => $detail,
            'price' => $price,
            'apply_form_link' => $apply_form_link,
            'course_duration' => $course_duration,
            'type' => $type,
        ]);

        $course_id = $id;
        if ($type == 'free_course') {
            $old_type = 'paid_course';
        } else {
            $old_type = 'free_course';
        }

        OppotunityPlace::where('post_id', $course_id)->where('oppotunity', $old_type)->delete();
        OppotunityPlace::create([
            'post_id' => $course_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);


        return redirect()->back()->with('success', 'Updated Course Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = Course::where('id', $id)->first()->type;
        Course::where('id', $id)->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', $type)->delete();
        return redirect()->back()->with('success', 'Course Deleted Successfully');
    }

    public function allData()
    {
        $total_course_count = Course::count();
        $total_free_course_count = Course::where('type', 'free_course')->count();
        $total_paid_course_count = Course::where('type', 'paid_course')->count();
        $courses = Course::orderBy('id', 'DESC')->paginate(10);
        return view('admin.courses.course', compact('total_course_count', 'total_free_course_count', 'total_paid_course_count', 'courses'));
    }

    public function searchData(Request $request)
    {
        $total_course_count = Course::count();
        $total_free_course_count = Course::where('type', 'free_course')->count();
        $total_paid_course_count = Course::where('type', 'paid_course')->count();
        $searchData = $request->searchData;
        $courses = Course::query()->where('course_name', 'LIKE', "%{$searchData}%")->orWhere('type', 'LIKE', "%{$searchData}%")->orWhere('platform', 'LIKE', "%{$searchData}%")->paginate(10);
        $courses->appends($request->all());
        return view('admin.courses.course', compact('total_course_count', 'total_free_course_count', 'total_paid_course_count', 'courses'));
    }

    public function detail($slug, $id)
    {
        $detail = Course::where('id', $id)->where('slug', $slug)->first();
        return view('courses.detail', compact('detail'));
    }
}