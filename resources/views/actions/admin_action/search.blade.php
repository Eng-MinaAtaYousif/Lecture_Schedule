@extends('layouts.admin')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/search.css') }}" rel="stylesheet" />
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">
        <h1> Search </h1>
        <h2 class="by_id bg-gradient-to-r from-sky-500 to-indigo-500" style="text-align: left"> Search By ID </h2>

        <form class="search_by_id" action="{{ route('search_by_id', ['username' => $req->username]) }}">
            @csrf
            <div class="id">
                <div class="form-group">
                    <input type="search" required class="form-control" name="id" id="search"
                        placeholder="Search by id">
                </div>
                <button type="submit" style="width: 30%"
                    class="btn btn-default bg-gradient-to-r from-sky-500 to-indigo-500">Searcch</button>
            </div>


        </form>



        <h2 class="by_un_ps bg-gradient-to-r from-sky-500 to-indigo-500" style="text-align: left"> Search By Username And
            Password </h2>


        <form class="username-password-search" action="{{ route('search_by_uname_pas', ['username' => $req->username]) }}">
            @csrf
            <div>
                <div class="form-group">
                    <input type="search" name="uname" required class="form-control" id="search"
                        placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="search" class="form-control" required name="psw" id="search"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default bg-gradient-to-r from-sky-500 to-indigo-500">Search</button>

            </div>


        </form>




        <a href="{{ route('admin_search', ['username' => $req->username]) }}"
            class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete"> Back </a>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/search.js') }}"></script>
@endsection
