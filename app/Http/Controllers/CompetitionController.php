<?php

namespace App\Http\Controllers;

use App\Models\AllPost;
use App\Models\BenefitCompetition;
use App\Models\Comment;
use App\Models\Competition;
use App\Models\CriteriaCompetition;
use App\Models\Like;
use App\Models\OppotunityPlace;
use App\Models\ProcessCompetition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function allCompetitions()
    {
        $data = Competition::orderBy('id', 'DESC')->paginate(9);
        return view('competitions.competitions', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.competitions.create');
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
            'image' => 'required|mimes:png,jpg,jpeg'
        ], [
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
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        $image = request()->file('image');
        $img_name = uniqid() . $image->getClientOriginalName();
        Storage::disk('upload_images')->put($img_name, $image->get());

        $competition = Competition::create([
            'slug' => Str::slug($title),
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

        $competition_id = $competition->id;
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaCompetition::create([
                    'competition_id' => $competition_id,
                    'criteria' => $c,
                ]);
            }
        }
        foreach ($benefit as $b) {
            if ($b !== null) {
                BenefitCompetition::create([
                    'competition_id' => $competition_id,
                    'benefit' => $b,
                ]);
            }
        }
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessCompetition::create([
                    'competition_id' => $competition_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::create([
            'slug' => Str::slug($title),
            'title' => $title,
            'name' => 'competition',
            'post_id' => $competition_id,
            'type' => '-',
            'deadline' => $deadline,
            'image' => $img_name,
        ]);


        OppotunityPlace::create([
            'post_id' => $competition_id,
            'oppotunity' => 'competition',
            'place' => $place,
        ]);

        return redirect()->back()->with('success', 'Competition Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competition = Competition::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.competitions.detail', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = Competition::where('id', $id)->with('criteria')->with('benefit')->with('process')->first();
        return view('admin.competitions.update', compact('competition'));
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
        $old_image = Competition::where('id', $id)->first()->image;
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
        $criteria = $request->criteria;
        $benefit = $request->benefit;
        $process = $request->process;

        Competition::where('id', $id)->update([
            'slug' => Str::slug($title),
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

        $competition_id = $id;
        CriteriaCompetition::where('competition_id', $competition_id)->delete();
        foreach ($criteria as $c) {
            if ($c !== null) {
                CriteriaCompetition::create([
                    'competition_id' => $competition_id,
                    'criteria' => $c,
                ]);
            }
        }
        BenefitCompetition::where('competition_id', $competition_id)->delete();
        foreach ($benefit as $b) {
            if ($b !== null) {

                BenefitCompetition::create([
                    'competition_id' => $competition_id,
                    'benefit' => $b,
                ]);
            }
        }
        ProcessCompetition::where('competition_id', $competition_id)->delete();
        foreach ($process as $p) {
            if ($p !== null) {
                ProcessCompetition::create([
                    'competition_id' => $competition_id,
                    'process' => $p,
                ]);
            }
        }

        AllPost::where('name', 'competition')->where('post_id', $competition_id)->update([
            'slug' => Str::slug($title),
            'title' => $title,
            'deadline' => $deadline,
            'image' => $img_name,
        ]);

        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'competition')->delete();
        OppotunityPlace::create([
            'post_id' => $competition_id,
            'oppotunity' => 'competition',
            'place' => $place,
        ]);


        return redirect()->back()->with('success', 'Updated Competition Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old_image = Competition::where('id', $id)->first()->image;
        $all_post_id = AllPost::where('name', 'competition')->where('post_id', $id)->first()->id;
        Like::where('post_id', $all_post_id)->where('type', 'competition')->delete();
        Comment::where('post_id', $all_post_id)->where('type', 'competition')->delete();
        Storage::disk('upload_images')->delete([$old_image]);
        Competition::where('id', $id)->delete();
        AllPost::where('post_id', $id)->where('name', 'competition')->delete();
        OppotunityPlace::where('post_id', $id)->where('oppotunity', 'competition')->delete();
        CriteriaCompetition::where('competition_id', $id)->delete();
        BenefitCompetition::where('competition_id', $id)->delete();
        ProcessCompetition::where('competition_id', $id)->delete();
        return redirect()->back()->with('success', 'Competition Deleted Successfully');
    }

    public function allData()
    {
        $total_competition_count = Competition::count();
        $competitions = Competition::orderBy('id', 'DESC')->paginate(10);
        return view('admin.competitions.competition', compact('total_competition_count', 'competitions'));
    }

    public function searchData(Request $request)
    {
        $total_competition_count = Competition::count();
        $searchData = $request->searchData;
        $competitions = Competition::query()->where('title', 'LIKE', "%{$searchData}%")->orWhere('place', 'LIKE', "%{$searchData}%")->paginate(10);
        $competitions->appends($request->all());
        return view('admin.competitions.competition', compact('total_competition_count', 'competitions'));
    }

    public function detail($slug, $id)
    {
        $detail = Competition::where('id', $id)->where('slug', $slug)->first();
        $criteria = CriteriaCompetition::where('competition_id', $id)->get();
        $benefit = BenefitCompetition::where('competition_id', $id)->get();
        $process = ProcessCompetition::where('competition_id', $id)->get();
        $all_post_id = AllPost::where('post_id', $id)->where('name', 'competition')->first()->id;
        $comments = Comment::where('post_id', $all_post_id)->where('type', 'competition')->latest()->get();
        return view('competitions.detail', compact('detail', 'criteria', 'benefit', 'process', 'comments'));
    }
    public function like($id)
    {
        $all_post_id = AllPost::where('name', 'competition')->where('post_id', $id)->first()->id;
        if (Like::where('post_id', $all_post_id)->where('type', 'competition')->first()) {
            Like::where('post_id', $all_post_id)->where('type', 'competition')->update([
                'total_count' => DB::raw("total_count + 1")
            ]);
        } else {
            Like::create([
                'post_id' => $all_post_id,
                'type' => 'competition',
                'total_count' => 1,
            ]);
        }
    }

    public function comment(Request $request)
    {
        $post_id = $request->post_id;
        $comment = $request->comment;
        $name = $request->name;
        $all_post_id = AllPost::where('name', 'competition')->where('post_id', $post_id)->first()->id;
        if ($post_id == null or $name == null) {
            return "failed";
        } else {
            Comment::create([
                'post_id' => $all_post_id,
                'type' => 'competition',
                'comment' => $comment,
                'name' => $name,
            ]);
            $comments = Comment::where('post_id', $all_post_id)->where('type', 'competition')->latest()->get();
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