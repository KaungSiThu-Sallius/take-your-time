<?php

namespace App\Http\Controllers;

use App\Models\AllPost;
use App\Models\BenefitConference;
use App\Models\Conference;
use App\Models\CriteriaConference;
use App\Models\OppotunityPlace;
use App\Models\ProcessConference;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ConferenceController extends Controller
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

    public function allConference()
    {
        $data = Conference::orderBy('id', 'DESC')->paginate(9);
        return view('conferences.conferences', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.conferences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $start_application_date = $request->start_application_date;
        $deadline = $request->deadline;
        $place = $request->place;
        $detail = $request->detail;
        $organized_by = $request->organized_by;
        $other_information = $request->other_information;
        $source = $request->source;
        $apply_link = $request->apply_link;
        $field = $request->field;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        $image->storeAs('images_database', $img_name);

        $conference = Conference::create([
            'slug' => Str::slug($title),
            'field' => $field,
            'title' => $title,
            'image' => $img_name,
            'start_application_date' => $start_application_date,
            'deadline' => $deadline,
            'funding' => $funding,
            'place' => $place,
            'organized_by' => $organized_by,
            'details' => $detail,
            'official_website' => $source,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $conference_id = $conference->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaConference::create([
                    'conference_id' => $conference_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitConference::create([
                    'conference_id' => $conference_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessConference::create([
                    'conference_id' => $conference_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'conference',
            'post_id' => $conference_id,
            'type' => '-',
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::create([
            'post_id' => $conference_id,
            'oppotunity' => 'conference',
            'place' => $place,
        ]);

        return redirect()->back()->with('success', 'Conference Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conference = Conference::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.conferences.detail', compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conference::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.conferences.update', compact('conference'));
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
        $old_image = Conference::where('id', $id)->first()->image;
        if (request()->file('image') == "") {
            $img_name = $old_image;
        } else {
            $image = request()->file('image');
            $img_name = uniqid() . $image->getClientOriginalName();
            Storage::disk('images_database')->delete([$old_image]);
            $image->storeAs('images_database', $img_name);
        }

        $title = $request->title;
        $start_application_date = $request->start_application_date;
        $deadline = $request->deadline;
        $place = $request->place;
        $detail = $request->detail;
        $organized_by = $request->organized_by;
        $other_information = $request->other_information;
        $source = $request->source;
        $apply_link = $request->apply_link;
        $field = $request->field;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;
        Conference::where('id', $id)->update([
            'slug' => Str::slug($title),
            'field' => $field,
            'title' => $title,
            'image' => $img_name,
            'start_application_date' => $start_application_date,
            'deadline' => $deadline,
            'funding' => $funding,
            'place' => $place,
            'organized_by' => $organized_by,
            'details' => $detail,
            'official_website' => $source,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $conference_id = $id;
        CriteriaConference::where('conference_id', $conference_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaConference::create([
                    'conference_id' => $conference_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitConference::where('conference_id', $conference_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitConference::create([
                    'conference_id' => $conference_id,
                    'benefit' => $b,
                ]);
            }
        }
        ProcessConference::where('conference_id', $conference_id)->delete();
        foreach ($process as $p) {
            if ($p !== null) {

                ProcessConference::create([
                    'conference_id' => $conference_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::where('name', 'conference')->where('post_id', $conference_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $conference_id)->where('oppotunity', 'conference')->delete();
        OppotunityPlace::create([
            'post_id' => $conference_id,
            'oppotunity' => 'conference',
            'place' => $place,
        ]);


        return redirect()->back()->with('success', 'Updated Conference Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conference::where('id', $id)->delete();
        AllPost::where('post_id', $id)->where('name', 'conference')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'conference')->delete();
        CriteriaConference::where('conference_id', $id)->delete();
        BenefitConference::where('conference_id', $id)->delete();
        ProcessConference::where('conference_id', $id)->delete();
        return redirect()->back()->with('success', 'Conference Deleted Successfully');
    }

    public function allData(Request $request)
    {
        $total_conference_count = Conference::count();
        $today_conference_count = Conference::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $conferences = Conference::orderBy('id', 'DESC')->paginate(10);
        return view('admin.conferences.conference', compact('total_conference_count', 'today_conference_count', 'conferences'));
    }

    public function searchData(Request $request)
    {
        $total_conference_count = Conference::count();
        $today_conference_count = Conference::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $searchData = $request->searchData;
        $conferences = Conference::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('field', 'LIKE', "%{$searchData}%")->orWhere('place', 'LIKE', "%{$searchData}%")->paginate(10);
        $conferences->appends($request->all());
        return view('admin.conferences.conference', compact('total_conference_count', 'today_conference_count', 'conferences'));
    }


    public function detail($slug, $id)
    {
        $detail = Conference::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaConference::where('conference_id', $id)->get();
        $benefit = BenefitConference::where('conference_id', $id)->get();
        $process = ProcessConference::where('conference_id', $id)->get();
        return view('conferences.detail', compact('detail', 'criteria', 'benefit', 'process'));
    }
}