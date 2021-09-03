<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use App\Models\AllPost;
use App\Models\BenefitOther;
use App\Models\Comment;
use App\Models\CriteriaOther;
use App\Models\Like;
use App\Models\OppotunityPlace;
use App\Models\Other;
use App\Models\ProcessOther;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OtherController extends Controller
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

    public function allOther()
    {
        $other = Other::orderBy('id', 'DESC')->paginate(9);
        return view('others.others', compact('other'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.others.create');
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
            'type' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
            'type.required' => "Type need to be select",
            'image.mimes' => "Your image format have to be JPG, JPEG, PNG",
        ]);
        $title = $request->title;
        $place = $request->place;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $detail = $request->detail;
        $organization = $request->organization;
        $other_information = $request->other_information;
        $apply_link = $request->apply_form_link;
        $type = $request->type;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        Storage::disk('upload_images')->put($img_name, $image->get());

        $other = Other::create([
            'slug' => Str::slug($title),
            'type' => $type,
            'title' => $title,
            'image' => $img_name,
            'start_date' => $start_date,
            'deadline' => $deadline,
            'place' => $place,
            'organization_name' => $organization,
            'details' => $detail,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $other_id = $other->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaOther::create([
                    'other_id' => $other_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitOther::create([
                    'other_id' => $other_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessOther::create([
                    'other_id' => $other_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'other',
            'post_id' => $other_id,
            'type' => $type,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);


        OppotunityPlace::create([
            'post_id' => $other_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);

        return redirect()->back()->with('success', 'Other Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $other = Other::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.others.detail', compact('other'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $other = Other::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.others.update', compact('other'));
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
        $old_image = Other::where('id', $id)->first()->image;
        if (request()->file('image') == "") {
            $img_name = $old_image;
        } else {
            $image = request()->file('image');
            $img_name = uniqid() . $image->getClientOriginalName();
            Storage::disk('upload_images')->delete([$old_image]);
            Storage::disk('upload_images')->put($img_name, $image->get());
        }

        $title = $request->title;
        $place = $request->place;
        $start_date = $request->start_date;
        $deadline = $request->deadline;
        $detail = $request->detail;
        $organization = $request->organization;
        $other_information = $request->other_information;
        $apply_link = $request->apply_form_link;
        $type = $request->type;
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        Other::where('id', $id)->update([
            'slug' => Str::slug($title),
            'type' => $type,
            'title' => $title,
            'image' => $img_name,
            'start_date' => $start_date,
            'deadline' => $deadline,
            'place' => $place,
            'organization_name' => $organization,
            'details' => $detail,
            'apply_form_link' => $apply_link,
            'other_information' => $other_information,
        ]);

        $other_id = $id;
        CriteriaOther::where('other_id', $other_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaOther::create([
                    'other_id' => $other_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitOther::where('other_id', $other_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitOther::create([
                    'other_id' => $other_id,
                    'benefit' => $b,
                ]);
            }
        }
        ProcessOther::where('other_id', $other_id)->delete();
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessOther::create([
                    'other_id' => $other_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::where('name', 'other')->where('post_id', $other_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'type' => $type,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'seminar')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'competition')->delete();
        OppotunityPlace::create([
            'post_id' => $other_id,
            'oppotunity' => $type,
            'place' => $place,
        ]);


        return redirect()->back()->with('success', 'Updated Other Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Other::where('id', $id)->delete();
        AllPost::where('post_id', $id)->where('name', 'other')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'seminar')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'competition')->delete();
        CriteriaOther::where('other_id', $id)->delete();
        BenefitOther::where('other_id', $id)->delete();
        ProcessOther::where('other_id', $id)->delete();
        return redirect()->back()->with('success', 'Other Deleted Successfully');
    }

    public function allData()
    {
        $total_seminar_count = Other::where('type', 'seminar')->count();
        $total_competition_count = Other::where('type', 'competition')->count();
        $others = Other::orderBy('id', 'DESC')->paginate(10);
        return view('admin.others.other', compact('total_seminar_count', 'total_competition_count', 'others'));
    }

    public function searchData(Request $request)
    {
        $total_seminar_count = Other::where('type', 'seminar')->count();
        $total_competition_count = Other::where('type', 'competition')->count();
        $searchData = $request->searchData;
        $others = Other::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('type', 'LIKE', "%{$searchData}%")->orWhere('place', 'LIKE', "%{$searchData}%")->paginate(10);
        $others->appends($request->all());
        return view('admin.others.other', compact('total_seminar_count', 'total_competition_count', 'others'));
    }

    public function detail($slug, $id)
    {
        $detail = Other::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaOther::where('other_id', $id)->get();
        $benefit = BenefitOther::where('other_id', $id)->get();
        $process = ProcessOther::where('other_id', $id)->get();
        $all_post_id = AllPost::where('post_id', $id)->where('name', 'other')->first()->id;
        $comments = Comment::where('post_id', $all_post_id)->where('type', 'other')->latest()->get();
        return view('others.detail', compact('detail', 'criteria', 'benefit', 'process', 'comments'));
    }
    public function like($id)
    {
        $all_post_id = AllPost::where('name', 'other')->where('post_id', $id)->first()->id;
        if (Like::where('post_id', $all_post_id)->where('type', 'other')->first()) {
            Like::where('post_id', $all_post_id)->where('type', 'other')->update([
                'total_count' => DB::raw("total_count + 1")
            ]);
        } else {
            Like::create([
                'post_id' => $all_post_id,
                'type' => 'other',
                'total_count' => 1,
            ]);
        }
    }

    public function comment(Request $request)
    {
        $post_id = $request->post_id;
        $comment = $request->comment;
        $name = $request->name;
        $all_post_id = AllPost::where('name', 'other')->where('post_id', $post_id)->first()->id;
        if ($post_id == null or $name == null) {
            return "failed";
        } else {
            Comment::create([
                'post_id' => $all_post_id,
                'type' => 'other',
                'comment' => $comment,
                'name' => $name,
            ]);
            $comments = Comment::where('post_id', $all_post_id)->where('type', 'other')->latest()->get();
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