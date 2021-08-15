<?php

namespace App\Http\Controllers\Scholarship;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::orderBy('created_at', 'DESC')->paginate(9);
        return view('scholarships.scholarships', compact('scholarships'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}