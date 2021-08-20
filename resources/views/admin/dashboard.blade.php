@extends('admin.layout.master')
@section('title')
<title>Dashboard</title>
@endsection
@section('nav_items')
    <li class="active">
        <a href="{{url('admin/dashboard')}}">
            <img src="../images/dashboard.svg" alt="dashboard" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Dashboard</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/scholarshipIndex')}}">
            <img src="../images/scholar.svg" alt="scholarship" type="image/svg+xml" class="svg_icon icon_sidebar" />
            <span>Scholarship</span>
        </a>
    </li>
    <li class="">
        <a href="{{url('admin/grantIndex')}}">
            <img src="{{asset('images/grant.svg')}}" alt="grant" type="image/svg+xml" class="svg_icon" />
            <span>Grant</span>
        </a>
    </li>

@endsection

@section('contents')

@endsection
