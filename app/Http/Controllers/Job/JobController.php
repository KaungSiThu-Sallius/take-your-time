<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\AllPost;
use App\Models\BenefitJob;
use App\Models\Comment;
use App\Models\CriteriaJob;
use App\Models\DocumentJob;
use App\Models\Job;
use App\Models\Like;
use App\Models\OppotunityPlace;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class JobController extends Controller
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

    public function allJob()
    {
        $jobs = Job::orderBy('id', 'DESC')->paginate(9);
        return view('jobs.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
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

        $title = $request->title;
        $place = $request->place;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $detail = $request->detail;
        $organization = $request->organization;
        $other_information = $request->other_information;
        $job_duration = $request->job_duration;
        $apply_link = $request->apply_form_link;
        $type = $request->type;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $document = $request->document;
        $salary = $request->salary;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        $image->storeAs('images_database', $img_name);

        $job = Job::create([
            'slug' => Str::slug($title),
            'type' => $type,
            'title' => $title,
            'image' => $img_name,
            'start_date' => $start_date,
            'salary' => $salary,
            'deadline' => $deadline,
            'job_duration' => $job_duration,
            'place' => $place,
            'organization_name' => $organization,
            'details' => $detail,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $job_id = $job->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaJob::create([
                    'job_id' => $job_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitJob::create([
                    'job_id' => $job_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($document as $d) {
            if ($d !== null) {
                DocumentJob::create([
                    'job_id' => $job_id,
                    'document' => $d,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'job',
            'post_id' => $job_id,
            'type' => $type,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);


        OppotunityPlace::create([
            'post_id' => $job_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);

        return redirect()->back()->with('success', 'Job Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::where('id', $id)->with('criteria')->with('benefit')->with('document')->first();
        return view('admin.jobs.detail', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::where('id', $id)->with('criteria')->with('benefit')->with('document')->first();
        return view('admin.jobs.update', compact('job'));
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
        $old_image = Job::where('id', $id)->first()->image;
        if (request()->file('image') == "") {
            $img_name = $old_image;
        } else {
            $image = request()->file('image');
            $img_name = uniqid() . $image->getClientOriginalName();
            Storage::disk('images_database')->delete([$old_image]);
            $image->storeAs('images_database', $img_name);
        }

        $title = $request->title;
        $place = $request->place;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $detail = $request->detail;
        $organization = $request->organization;
        $other_information = $request->other_information;
        $job_duration = $request->job_duration;
        $apply_link = $request->apply_form_link;
        $type = $request->type;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $document = $request->document;
        $salary = $request->salary;
        Job::where('id', $id)->update([
            'slug' => Str::slug($title),
            'type' => $type,
            'title' => $title,
            'image' => $img_name,
            'start_date' => $start_date,
            'salary' => $salary,
            'deadline' => $deadline,
            'job_duration' => $job_duration,
            'place' => $place,
            'organization_name' => $organization,
            'details' => $detail,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $job_id = $id;
        CriteriaJob::where('job_id', $job_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaJob::create([
                    'job_id' => $job_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitJob::where('job_id', $job_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitJob::create([
                    'job_id' => $job_id,
                    'benefit' => $b,
                ]);
            }
        }
        DocumentJob::where('job_id', $job_id)->delete();
        foreach ($document as $d) {
            if ($d !== null) {
                DocumentJob::create([
                    'job_id' => $job_id,
                    'document' => $d,
                ]);
            }
        }

        AllPost::where('name', 'job')->where('post_id', $job_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'type' => $type,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'part_time_job')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'full_time_job')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'internship')->delete();
        OppotunityPlace::create([
            'post_id' => $job_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);


        return redirect()->back()->with('success', 'Updated Job Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::where('id', $id)->delete();
        AllPost::where('post_id', $id)->where('name', 'job')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'part_time_job')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'full_time_job')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'internship')->delete();
        CriteriaJob::where('job_id', $id)->delete();
        BenefitJob::where('job_id', $id)->delete();
        DocumentJob::where('job_id', $id)->delete();
        return redirect()->back()->with('success', 'Job Deleted Successfully');
    }

    public function allData()
    {
        $total_job_count = Job::count();
        $total_part_time_count = Job::where('type', 'part_time_job')->count();
        $total_full_time_count = Job::where('type', 'full_time_job')->count();
        $total_internship_count = Job::where('type', 'internship')->count();
        $today_job_count = Job::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $jobs = Job::orderBy('id', 'DESC')->paginate(10);
        return view('admin.jobs.job', compact('total_part_time_count', 'total_full_time_count', 'total_internship_count', 'total_job_count', 'today_job_count', 'jobs'));
    }

    public function searchData(Request $request)
    {
        $total_job_count = Job::count();
        $total_part_time_count = Job::where('type', 'part_time_job')->count();
        $total_full_time_count = Job::where('type', 'full_time_job')->count();
        $total_internship_count = Job::where('type', 'internship')->count();
        $searchData = $request->searchData;
        $jobs = Job::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('type', 'LIKE', "%{$searchData}%")->orWhere('place', 'LIKE', "%{$searchData}%")->paginate(10);
        $jobs->appends($request->all());
        return view('admin.jobs.job', compact('total_part_time_count', 'total_full_time_count', 'total_internship_count', 'total_job_count', 'today_job_count', 'jobs'));
    }

    public function detail($slug, $id)
    {
        $detail = Job::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaJob::where('job_id', $id)->get();
        $benefit = BenefitJob::where('job_id', $id)->get();
        $document = DocumentJob::where('job_id', $id)->get();
        $comments = Comment::where('post_id', $id)->where('type', 'job')->latest()->get();
        return view('jobs.detail', compact('detail', 'criteria', 'benefit', 'document', 'comments'));
    }

    public function like($id)
    {
        if (Like::where('post_id', $id)->where('type', 'job')->first()) {
            Like::where('post_id', $id)->where('type', 'job')->update([
                'total_count' => DB::raw("total_count + 1")
            ]);
        } else {
            Like::create([
                'post_id' => $id,
                'type' => 'job',
                'total_count' => 1,
            ]);
        }
    }

    public function comment(Request $request)
    {
        $post_id = $request->post_id;
        $comment = $request->comment;
        $name = $request->name;
        if ($post_id == null or $name == null) {
            return "failed";
        } else {
            Comment::create([
                'post_id' => $post_id,
                'type' => 'job',
                'comment' => $comment,
                'name' => $name,
            ]);
            $comments = Comment::where('post_id', $post_id)->where('type', 'job')->latest()->get();
            $data = "";
            foreach ($comments as $c) {
                $date = date('F j, Y', strtotime($c->created_at));
                $name = $c->name;
                $comment = $c->comment;
                $image = asset('images/comment.svg');
                $data .= "
                        <div class='card mt-5 comment_card'>
                            <div class='card-header'>
                                <div class='showcmt_header'>
                                    <div class='showcmt_header_blog'>
                                        <img src={$image} style='width: 50px' alt='cmt_img' class='cmt_img'>

                                        <h5>{$name} <small style='font-size:12px'>{$date}</small></h5>
                                    </div>
                                </div>
                            </div>
                            <div class='card-body'>
                                <p>{$comment}</p>
                            </div>
                        </div>
                ";
            }
            return response()->json(['data' => $data]);
        }
    }
}