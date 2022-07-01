@extends('layouts.assestant')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/doctor_styles/suggestion.css') }}" rel="stylesheet" />
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="post col-lg-9 col-md-9 col-sm-9">
        <form id="algin-form" action="{{ route('ass_publish_suggestion', ['username' => $req->username]) }}"
            enctype="application/x-www-form-urlencoded">
            @csrf
            <div class="form-group">
                <h2>Leave a comment</h2>
                <textarea name="suggestion" required id="msg" cols="30" rows="10" style="background-color: black;"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" id="post" class="btn">Post Comment</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/doctor/make_suggestion.js') }}"></script>
@endsection
