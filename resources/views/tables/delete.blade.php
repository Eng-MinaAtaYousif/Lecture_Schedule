@extends('layouts.admin')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/create_schedule.css') }}" rel="stylesheet" />
<script src="{{ asset('js/admin/create_schedule.js') }}"></script>
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="maindiv">
        <div class="body-top">
            <h1 class=""> Delete Schedule </h1>
        </div>
        <div class="body-body container">
            <form class="form" method="GET" enctype="application/x-www-form-urlencoded"
                action="{{ route('show_table', ['username' => $req->username]) }}">
                @csrf

                <div class="form-group">
                    <label for="slebvel">Choose Level</label>
                    <select id="slevel" class="form-select" aria-label="Default select example" name='level'
                        class="form-control">
                        <option selected>Open this select level</option>
                        <option value="level_one_general"> Level one general </option>
                        <option value="level_two_general"> Level two general </option>
                        <option value="level_three_general"> Level three general </option>
                        <option value="level_four_general"> Level four general </option>
                        <option value="Level_one_bio">Level one bio</option>
                        <option value="Level_two_bio"> level two bio </option>
                        <option value="Level_three_bio"> level three bio </option>
                        <option value="Level_four_bio"> level four bio </option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="sdepartment">Choose Dep</label>
                    <select id="sdepartment" class="form-select" aria-label="Default select example" name="department"
                        class="form-control">
                        <option selected>Open this select dep</option>
                        <option value="level one">level one</option>
                        <option value="level two">level two</option>
                        <option value="Is">Is</option>
                        <option value="Cs">Cs</option>
                        <option value="It">It</option>
                        <option value="bio">Bio</option>



                    </select>
                </div>



                <button type="submit" style="height:auto" class="btn btn-primary save">Delete</button>
            </form>


        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0') }}"></script>
    @endsection
