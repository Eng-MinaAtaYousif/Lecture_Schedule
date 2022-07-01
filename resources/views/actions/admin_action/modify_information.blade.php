@extends('layouts.admin')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />

<link href="{{ asset('css/admin_styles/modify_information.css') }}" rel="stylesheet" />
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">
        <h1> Update </h1>

        <div class="parant">

            <a href="{{ url('/admin/update/doc_or_ass') }}">
                <div class="bg-gradient-to-r from-sky-500 to-indigo-300">
                    <h2>Update Doctor /\ Assestant</h2>
                </div>
            </a>

            <a href="{{ url('/admin/update/student') }}">

                <div class="bg-gradient-to-r from-sky-500 to-indigo-300">
                    <h2>Update Student </h2>
                </div>

            </a>


        </div>


    </div>



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/modify_information.js') }}"></script>
@endsection
