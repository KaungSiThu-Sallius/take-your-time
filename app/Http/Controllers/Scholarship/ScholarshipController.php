<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use App\Models\AllPost;
use App\Models\BenefitScholarship;
use App\Models\CriteriaScholarship;
use App\Models\FeaturedOppotunity;
use App\Models\Fellowship;
use App\Models\Master;
use App\Models\OppotunityPlace;
use App\Models\Phd;
use App\Models\ProcessScholarship;
use App\Models\Scholarship;
use App\Models\Undergraduate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ScholarshipController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.scholarships.create');
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
        $start_application_date = $request->start_application_date;
        $deadline = $request->deadline;
        $country = $request->country;
        $detail = $request->detail;
        $given_by = $request->given_by;
        $other_information = $request->other_information;
        $source = $request->source;
        $apply_link = $request->apply_link;
        $type = $request->type;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        $image->storeAs('images_database', $img_name);

        $scholarship = Scholarship::create([
            'name' => 'Scholarship',
            'slug' => Str::slug($title),
            'type' => implode(',', $type),
            'title' => $title,
            'image' => $img_name,
            'start_application_date' => $start_application_date,
            'deadline' => $deadline,
            'funding' => $funding,
            'country' => $country,
            'given_by' => $given_by,
            'details' => $detail,
            'official_website' => $source,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $scholarship_id = $scholarship->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'scholarship',
            'post_id' => $scholarship_id,
            'type' => implode(',', $type),
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        foreach ($type as $t) {
            if ($t == 'Undergraduate') {
                Undergraduate::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Undergraduate',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);

                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'undergraduate',
                    'place' => $country,
                ]);
            } elseif ($t == 'Master') {
                Master::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Master',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'master',
                    'place' => $country,
                ]);
            } elseif ($t == 'Phd') {
                Phd::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Phd',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'phd',
                    'place' => $country,
                ]);
            } elseif ($t == 'Fellowship') {
                Fellowship::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Fellowship',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'fellowship',
                    'place' => $country,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Scholarship Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scholarship = Scholarship::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.scholarships.detail', compact('scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scholarship = Scholarship::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.scholarships.update', compact('scholarship'));
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
        $old_image = Scholarship::where('id', $id)->first()->image;
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
        $country = $request->country;
        $detail = $request->detail;
        $given_by = $request->given_by;
        $other_information = $request->other_information;
        $source = $request->source;
        $apply_link = $request->apply_link;
        $type = $request->type;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;
        Scholarship::where('id', $id)->update([
            'name' => 'Scholarship',
            'slug' => Str::slug($title),
            'type' => implode(',', $type),
            'title' => $title,
            'image' => $img_name,
            'start_application_date' => $start_application_date,
            'deadline' => $deadline,
            'funding' => $funding,
            'country' => $country,
            'given_by' => $given_by,
            'details' => $detail,
            'official_website' => $source,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $scholarship_id = $id;
        CriteriaScholarship::where('scholarship_id', $scholarship_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitScholarship::where('scholarship_id', $scholarship_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'benefit' => $b,
                ]);
            }
        }
        ProcessScholarship::where('scholarship_id', $scholarship_id)->delete();
        foreach ($process as $p) {
            if ($p !== null) {

                ProcessScholarship::create([
                    'scholarship_id' => $scholarship_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::where('name', 'scholarship')->where('post_id', $scholarship_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'type' => implode(',', $type),
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $scholarship_id)->delete();
        Undergraduate::where('scholarship_id', $scholarship_id)->delete();
        Master::where('scholarship_id', $scholarship_id)->delete();
        Phd::where('scholarship_id', $scholarship_id)->delete();
        Fellowship::where('scholarship_id', $scholarship_id)->delete();
        foreach ($type as $t) {
            if ($t == 'Undergraduate') {
                Undergraduate::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Undergraduate',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);

                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'undergraduate',
                    'place' => $country,
                ]);
            } elseif ($t == 'Master') {
                Master::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Master',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'master',
                    'place' => $country,
                ]);
            } elseif ($t == 'Phd') {
                Phd::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Phd',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'phd',
                    'place' => $country,
                ]);
            } elseif ($t == 'Fellowship') {
                Fellowship::create([
                    'scholarship_id' => $scholarship_id,
                    'slug' => Str::slug($title),
                    'type' => 'Fellowship',
                    'title' => $title,
                    'image' => $img_name,
                    'start_application_date' => $start_application_date,
                    'deadline' => $deadline,
                    'funding' => $funding,
                    'country' => $country,
                    'given_by' => $given_by,
                    'details' => $detail,
                    'official_website' => $source,
                    'apply_form_link' => $apply_link,
                    'other_information' => $other_information,
                ]);
                OppotunityPlace::create([
                    'post_id' => $scholarship_id,
                    'oppotunity' => 'fellowship',
                    'place' => $country,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Updated Scholarship Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Scholarship::where('id', $id)->delete();
        AllPost::where('post_id', $id)->delete();
        Undergraduate::where('scholarship_id', $id)->delete();
        Master::where('scholarship_id', $id)->delete();
        Phd::where('scholarship_id', $id)->delete();
        Fellowship::where('scholarship_id', $id)->delete();
        OppotunityPlace::where('post_id', $id)->delete();
        CriteriaScholarship::where('scholarship_id', $id)->delete();
        BenefitScholarship::where('scholarship_id', $id)->delete();
        ProcessScholarship::where('scholarship_id', $id)->delete();
        return redirect()->back()->with('success', 'Scholarship Deleted Successfully');
    }

    public function allScholarship()
    {
        $scholarships = Scholarship::orderBy('created_at', 'DESC')->paginate(9);
        return view('scholarships.scholarships', compact('scholarships'));
    }

    public function allData()
    {
        $total_scholar_count = Scholarship::count();
        $today_scholar_count = Scholarship::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $scholarships = Scholarship::orderBy('id', 'DESC')->paginate(10);
        return view('admin.scholarships.scholarship', compact('total_scholar_count', 'today_scholar_count', 'scholarships'));
    }

    public function searchData(Request $request)
    {
        $total_scholar_count = Scholarship::count();
        $today_scholar_count = Scholarship::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $searchData = $request->searchData;
        $scholarships = Scholarship::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('type', 'LIKE', "%{$searchData}%")->orWhere('country', 'LIKE', "%{$searchData}%")->paginate(10);
        $scholarships->appends($request->all());
        return view('admin.scholarships.scholarship', compact('total_scholar_count', 'today_scholar_count', 'scholarships'));
    }

    public function detail($slug, $id)
    {
        $detail = Scholarship::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaScholarship::where('scholarship_id', $id)->get();
        $benefit = BenefitScholarship::where('scholarship_id', $id)->get();
        $process = ProcessScholarship::where('scholarship_id', $id)->get();
        return view('scholarships.detail', compact('detail', 'criteria', 'benefit', 'process'));
    }
}