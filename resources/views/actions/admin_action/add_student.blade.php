@extends('layouts.admin')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/delete_modify_id.css') }}" rel="stylesheet" />
{{-- <link href="{{asset('css/admin_styles/create_schedule.css')}}" rel="stylesheet"/> --}}
<link href="{{ asset('css/admin_styles/add_student.css') }}" rel="stylesheet" />
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">
        <h1> Add Student </h1>
        <div class="actully_modify_id">
            <form class="form-inline" action="{{ route('admin_success_add_student', ['username' => $req->username]) }}">
                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                </div>
                @error('name')
                    <p> {{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="id"> ID </label>
                    <input type="number" name="id" class="form-control" id="id" placeholder="ID">
                </div>
                @error('id')
                    <p>{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="username"> Username </label>
                    <input type="text" name="uname" class="form-control" id="username" placeholder="Username">
                </div>
                @error('uname')
                    <p> {{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                @error('password')
                    <p> {{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="ph"> Phone </label>
                    <input type="number" name="phone" class="form-control" id="ph" placeholder="Phone">
                </div>
                @error('phone')
                    <p> {{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                @error('email')
                    <p> {{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label for="slebvel">Choose Level</label>
                    <select id="slevel" class="form-select" aria-label="Default select example" name='level'
                        class="form-control">
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
                    <label for="sdepartment">Choose Department</label>
                    <select id="sdepartment" class="form-select" aria-label="Default select example" name="department"
                        class="form-control">
                        <option value="bio">Bio</option>
                        <option value="level one">level one</option>
                        <option value="level two">level two</option>
                        <option value="Is">Is</option>
                        <option value="Cs">Cs</option>
                        <option value="It">It</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete"> Add
                </button>

            </form>
        </div>

    </div>










    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/add_student.js') }}"></script>
@endsection
