<?php

namespace App\Http\Controllers;

use App\Models\AllPost;
use App\Models\BenefitGrant;
use App\Models\Comment;
use App\Models\CriteriaGrant;
use App\Models\Grant;
use App\Models\Like;
use App\Models\OppotunityPlace;
use App\Models\ProcessGrant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GrantController extends Controller
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

    public function allGrant()
    {
        $data = Grant::orderBy('id', 'DESC')->paginate(9);
        return view('grants/grants', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.grants.create');
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
        $country = $request->country;
        $detail = $request->detail;
        $given_by = $request->given_by;
        $other_information = $request->other_information;
        $source = $request->source;
        $apply_link = $request->apply_link;
        $level = $request->level;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        Storage::disk('post_images')->put($img_name, $image->get());

        $grant = Grant::create([
            'slug' => Str::slug($title),
            'level' => implode(',', $level),
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

        $grant_id = $grant->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaGrant::create([
                    'grant_id' => $grant_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitGrant::create([
                    'grant_id' => $grant_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessGrant::create([
                    'grant_id' => $grant_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'grant',
            'post_id' => $grant_id,
            'type' => implode(',', $level),
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::create([
            'post_id' => $grant_id,
            'oppotunity' => 'grant',
            'place' => $country,
        ]);

        return redirect()->back()->with('success', 'Grant Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $grant = Grant::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.grants.detail', compact('grant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grant = Grant::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.grants.update', compact('grant'));
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
        $old_image = Grant::where('id', $id)->first()->image;
        if (request()->file('image') == "") {
            $img_name = $old_image;
        } else {
            $image = request()->file('image');
            $img_name = uniqid() . $image->getClientOriginalName();
            Storage::disk('post_images')->delete([$old_image]);
            Storage::disk('post_images')->put($img_name, $image->get());
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
        $level = $request->level;
        $funding = $request->funding;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;
        Grant::where('id', $id)->update([
            'slug' => Str::slug($title),
            'level' => implode(',', $level),
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

        $grant_id = $id;
        CriteriaGrant::where('grant_id', $grant_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaGrant::create([
                    'grant_id' => $grant_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitGrant::where('grant_id', $grant_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitGrant::create([
                    'grant_id' => $grant_id,
                    'benefit' => $b,
                ]);
            }
        }
        ProcessGrant::where('grant_id', $grant_id)->delete();
        foreach ($process as $p) {
            if ($p !== null) {

                ProcessGrant::create([
                    'grant_id' => $grant_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::where('name', 'grant')->where('post_id', $grant_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'type' => implode(',', $level),
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $grant_id)->where('oppotunity', 'grant')->delete();
        OppotunityPlace::create([
            'post_id' => $grant_id,
            'oppotunity' => 'grant',
            'place' => $country,
        ]);


        return redirect()->back()->with('success', 'Updated Grant Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grant::where('id', $id)->delete();
        AllPost::where('post_id', $id)->where('name', 'grant')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'grant')->delete();
        CriteriaGrant::where('grant_id', $id)->delete();
        BenefitGrant::where('grant_id', $id)->delete();
        ProcessGrant::where('grant_id', $id)->delete();
        return redirect()->back()->with('success', 'Grant Deleted Successfully');
    }

    public function allData()
    {
        $total_grant_count = Grant::count();
        $today_grant_count = Grant::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $grants = Grant::orderBy('id', 'DESC')->paginate(10);
        return view('admin.grants.grant', compact('total_grant_count', 'today_grant_count', 'grants'));
    }


    public function searchData(Request $request)
    {
        $total_grant_count = Grant::count();
        $today_grant_count = Grant::whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $searchData = $request->searchData;
        $grants = Grant::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('level', 'LIKE', "%{$searchData}%")->orWhere('country', 'LIKE', "%{$searchData}%")->paginate(10);
        $grants->appends($request->all());
        return view('admin.grants.grant', compact('total_grant_count', 'today_grant_count', 'grants'));
    }

    public function detail($slug, $id)
    {
        $detail = Grant::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaGrant::where('grant_id', $id)->get();
        $benefit = BenefitGrant::where('grant_id', $id)->get();
        $process = ProcessGrant::where('grant_id', $id)->get();
        $all_post_id = AllPost::where('post_id', $id)->where('name', 'grant')->first()->id;
        $comments = Comment::where('post_id', $all_post_id)->where('type', 'grant')->latest()->get();
        return view('grants.detail', compact('detail', 'criteria', 'benefit', 'process', 'comments'));
    }

    public function like($id)
    {
        $all_post_id = AllPost::where('name', 'grant')->where('post_id', $id)->first()->id;
        if (Like::where('post_id', $all_post_id)->where('type', 'grant')->first()) {
            Like::where('post_id', $all_post_id)->where('type', 'grant')->update([
                'total_count' => DB::raw("total_count + 1")
            ]);
        } else {
            Like::create([
                'post_id' => $all_post_id,
                'type' => 'grant',
                'total_count' => 1,
            ]);
        }
    }

    public function comment(Request $request)
    {
        $post_id = $request->post_id;
        $comment = $request->comment;
        $name = $request->name;
        $all_post_id = AllPost::where('name', 'grant')->where('post_id', $post_id)->first()->id;
        if ($post_id == null or $name == null) {
            return "failed";
        } else {
            Comment::create([
                'post_id' => $all_post_id,
                'type' => 'grant',
                'comment' => $comment,
                'name' => $name,
            ]);
            $comments = Comment::where('post_id', $all_post_id)->where('type', 'grant')->latest()->get();
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