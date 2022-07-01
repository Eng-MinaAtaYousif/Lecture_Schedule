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
            <h1 class=""> Create Schedule </h1>
        </div>
        <div class="body-body container">

            {{-- method="GET"   action="{{route('creation',['username'=>$req->username])}}" --}}
            <form class="form" method="GET" action="{{ route('creation', ['username' => $req->username]) }}"
                enctype="application/x-www-form-urlencoded">
                @csrf


                <div class="radio">
                    <label>
                        <input type="radio" name="LoS" required value="lecture" checked>
                        Lecture
                    </label>
                    <label>
                        <input type="radio" name="LoS" required value="section">
                        Section
                    </label>
                    <label>
                        <input type="radio" name="LoS" required value="Exam">
                        Exam
                    </label>
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="{{ old('name') }}" required placeholder="Name" id="name"
                        name='name' class="form-control" />
                </div>

                <div>
                    <label for="slebvel">Choose Level</label>
                    <select id="slevel" class="form-select" aria-label="Default select example" name='level'
                        class="form-control">
                        <option value="level_one_general"> Level one general </option>
                        <option value="level_two_general"> Level two general </option>
                        <option value="level_three_general"> Level three general </option>
                        <option value="level_four_general"> Level four general </option>
                        <option value="level_one_bio">Level one bio</option>
                        <option value="level_two_bio"> level two bio </option>
                        <option value="level_three_bio"> level three bio </option>
                        <option value="level_four_bio"> level four bio </option>

                    </select>
                </div>
                <div>
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
                <div>
                    <label for="sDay">Choose Day</label>
                    <select id="sDay" name="day" class="form-select" aria-label="Default select example"
                        class="form-control">
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="tuesday">tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>

                    </select>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                        <label> Time </label>
                    </div>
                    <div class="col-xs-3">
                        <input type="number" value="{{ old('time_from') }}" required class="time" placeholder="From"
                            name="time_from">
                    </div>

                    <div class="col-xs-4">
                        <input type="number" value="{{ old('time_to') }}" required class="time" placeholder="To"
                            name="time_to">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" value="{{ old('subject') }}" required placeholder="Subject" id="subject"
                        name='subject' class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Subject ID</label>
                    <input type="text" value="{{ old('subject_id') }}" required placeholder="Subject_id" id="subject_id"
                        name='subject_id' class="form-control" />
                </div>

                <div class="row">
                    <div class="col-xs-2">
                        <label> Hall Floor </label>
                        <input type="number" value="{{ old('hall_floor') }}" required class="time"
                            placeholder="Hall Floor" name="hall_floor">
                    </div>

                    <div class="col-xs-2">
                        <label> Hall Number </label>
                        <input type="number" value="{{ old('hall_number') }}" required class="time"
                            placeholder="Hall Number" name="hall_number">
                    </div>

                </div>



                <button type="submit" id='go' style="height: auto" class="btn btn-primary save">Save</button>


            </form>


        </div>

        <script>
            // $('#go').click(function(){
            //   $.ajax({
            //     method:'GET',
            //     url:"" ,
            //     data:{
            //       "_token":"{{ csrf_token() }}",
            //       'LoS':$("input[name='LoS']").val() ,
            //       "name ":$("input[name='name']").val()  ,
            //       'level':$("input[name='level']").val()  ,
            //       'department':$("input[name='department']").val()  ,
            //       "day": $("input[name='day']").val() ,
            //       "time_from": $("input[name='time_from']").val() ,
            //       "time_to": $("input[name='time_to']").val() ,
            //       "subject":$("input[name='subject']").val()  ,
            //       "subject_id": $("input[name='subject_id']").val() ,
            //       "hall_floor":$("input[name='hall_floor']").val()  ,
            //       "hall_number": $("input[name='hall_number']").val() ,
            //     },
            //     success:function(r){
            //      console.log(r);
            //     },
            //     error:function(r){
            //       console.log(r);
            //     }
            //   })
        </script>

        {{-- <script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0')}}"></script> --}}
        <script src="{{ asset('js/admin/create_schedule.js') }}"></script>
    @endsection
