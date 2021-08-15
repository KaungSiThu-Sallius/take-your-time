@extends('admin.layout.master')
@section('title')
<title>Create Scholarship</title>
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
    <div class="create_scholar">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-9 col-12">
                    <form action="" method="POST">
                        @csrf
                        @include('admin.alert')
                        <h2 class="mb-4">Create Scholarship <span style="font-size:14px; color:red">(<? echo date("d M, Y") ?>)</span>
                        </h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="word" name="word" class="form-control" required>
                                    <label for="word" class="">Word</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="word_form" name="word_form" class="form-control" required>
                                    <label for="word_form">Word Form</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="meaning" name="meaning" class="form-control" required>
                                    <label for="meaning">Word Meaning</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="eg_sentenses" name="eg_sentenses" rows="3"
                                        class="form-control md-textarea" required></textarea>
                                    <label for="eg_sentenses">Example Sentenses</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="synonyms" name="synonyms" class="form-control" required>
                                    <label for="synonyms">Synonyms</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="antonyms" name="antonyms" class="form-control" required>
                                    <label for="antonyms">Antonyms</label>
                                </div>
                            </div>
                        </div>

                        <input class="btn" type="submit" value="Create">

                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection

