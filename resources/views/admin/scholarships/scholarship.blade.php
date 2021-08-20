@extends('admin.layout.master')
@section('title')
<title>Scholarship</title>
@endsection
@section('nav_items')
    <li class="">
        <a href="{{url('admin/dashboard')}}">
            <img src="{{asset('images/dashboard.svg')}}" alt="dashboard" type="image/svg+xml" class="svg_icon" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="active">
        <a href="{{url('admin/scholarshipIndex')}}">
            <img src="{{asset('images/scholar.svg')}}" alt="scholarship" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Scholarship</span>
        </a>
    </li>

@endsection

@section('contents')
<div class="scholarships">
    <div class="container">
        <div class="row mt-4">
            <div class="offset-md-3 col-md-9 col-12">
                <div class="search">
                    <form action="{{url('admin/scholarshipIndex/search')}}" method="GET">
                        <input type="text" class="searchTerm" name="searchData" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="cards">
            <div class="row mt-5">
                <div class="offset-md-3 col-md-4">
                    <div class="card_info text-center">
                        <h4>Total Scholarships</h4>
                        <span class="badge badge-pill badge-default">{{$total_scholar_count}}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card_info text-center">
                        <h4>Today Scholarships</h4>
                        <span class="badge badge-pill badge-default">{{$today_scholar_count}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="row mt-5">
                <div class="offset-md-3 col-12 col-md-9 col-12">
                    <div class="heading">
                        <div class="row">
                            <div class="col-6"><h2>Scholarships</h2></div>
                            <div class="col-6">
                                <a href="{{route('scholarship.create')}}"><div class="button btn">Create</div></a>

                            </div>
                        </div>
                    </div>


                    <div class="table-responsive data_table">
                        @include('admin.alert')
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Title</th>
                              <th scope="col">Type</th>
                              <th scope="col">Deadline</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($scholarships as $s)
                            <tr>
                                <th scope="row">{{($scholarships->currentPage() - 1) * $scholarships->perPage() + $loop->iteration}}</th>
                                <th>{{$s->title}}</th>
                                <td>{{$s->type}}</td>
                                <td>{{date('F j, Y', strtotime($s->deadline))}}</td>
                                <td>
                                    <a href="{{route('scholarship.show',$s->id)}}"><span class="badge badge-pill badge-info">Details</span></a>
                                    <a href="{{route('scholarship.edit',$s->id)}}"><span class="badge badge-pill badge-warning">Update</span></a>
                                    <form action="{{route('scholarship.destroy', $s->id)}}" method="post" style="display:inline;">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge badge-pill badge-danger"
                                      onclick="return confirm('Are you want to delete {{$s->title}} ?')">Delete</button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="d-flex justify-content-center justify-content-center">
                        {{$scholarships->links()}}
                    </div>



                </div>

            </div>
        </div>

    </div>
</div>
@endsection
