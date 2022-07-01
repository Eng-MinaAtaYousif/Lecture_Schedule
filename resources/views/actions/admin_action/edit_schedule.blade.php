@extends('layouts.admin')

<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/delete_modify_id.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/add_student.css') }}" rel="stylesheet" />
<link href="{{ asset('css/table/edit.css') }}" rel="stylesheet" />

<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">
        <h1> Edit Schedule </h1>
        <div class="actully_modify_id">
            <form class="form-inline" action="{{ route('edit_table', ['username' => $req->username]) }}">



                <div class="form-group">
                    <label for="time_from"> Time From<span style="font-size: 15px">(old)</span></label>
                    <input type="number" name="old_time_from" required class="form-control" id="time_from"
                        placeholder="Old Time ( From )">
                </div>

                <div class="form-group">
                    <label for="to"> Time to<span style="font-size: 15px">(old)</span></label>
                    <input type="number" name="old_time_to" required class="form-control" id="to"
                        placeholder="Old Time ( To )">
                </div>


                <div class="form-group">
                    <label for="slebvel">Choose Level<span style="font-size: 15px">(old)</span></label>
                    <select id="slevel" class="form-select" aria-label="Default select example" name='old_level'
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
                    <label for="sDay">Choose Day<span style="font-size: 15px">(old)</span></label>
                    <select id="sDay" class="form-select" aria-label="Default select example" name="old_day"
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


                {{-- <div style="color: black" class="alert alert-danger form-control" role="alert" style="display: flex; flex-direction:row;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                  <p class="sr-only" style="color:black"><span style="margin-left: 2px;font-size:20px"> Warn </span> This value will be permanently changed</p>
                  
                </div> --}}
                <div style="width: 80%; margin:10px auto" class="alert alert-primary d-flex align-items-center"
                    role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img"
                        aria-label="Warning:">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <div>
                        Please complete the requirements to complete the modification process 👍👍👍👍👍👍 ;
                    </div>
                </div>

                {{-- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? --}}



                <div class="radio form-group">
                    <label style="margin-left: 10px; cursor: pointer;">
                        <input style="width: 20px;height:20px" type="radio" name="LoS" required value="lecture"
                            checked>
                        Lecture
                    </label>
                    <label style="margin-left: 10px; cursor: pointer;">
                        <input type="radio" style="width: 20px;height:20px" name="LoS" required value="section">
                        Section
                    </label>
                    <label style="margin-left: 10px; cursor: pointer;">
                        <input type="radio" style="width: 20px;height:20px" name="LoS" required value="Exam">
                        Exam
                    </label>
                </div>


                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" name="name" required class="form-control" id="name" placeholder="name">
                </div>



                <div class="form-group">
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
                <div class="form-group">
                    <label for="sDay">Choose Day</label>
                    <select id="sDay" class="form-select" aria-label="Default select example" name="day"
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

                <div class="form-group">
                    <label for="time_from"> Time From </label>
                    <input type="number" name="time_from" required class="form-control" id="time_from"
                        placeholder="Time From">
                </div>
                <div class="form-group">
                    <label for="time_to"> Time To </label>
                    <input type="number" name="time_to" required class="form-control" id="time_to"
                        placeholder="Time To">
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" value="{{ old('subject') }}" required placeholder="Subject" id="subject"
                        name='subject' class="form-control" />
                </div>

                <div class="form-group">
                    <label for="subject_id">Subject ID</label>
                    <input type="text" value="{{ old('subject_id') }}" required placeholder="Subject_id"
                        id="subject_id" name='subject_id' class="form-control" />
                </div>

                <div class="form-group">
                    <label for="hall_floor"> Hall Floor </label>
                    <input type="number" name="hall_floor" required class="form-control" id="hall_floor"
                        placeholder="Hall Floor">
                </div>
                <div class="form-group">
                    <label for="hall_number"> Hall Number </label>
                    <input type="number" name="hall_number" required class="form-control" id="hall_number"
                        placeholder="Hall Number">
                </div>

        </div>

        {{-- ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? --}}
        <div class="form-group" style="margin-bottom: 50px">
            <button class="btn btn-primary bg-gradient-to-r form-control from-cyan-900 to-blue-700 btn-delete"> Edit Table
            </button>

        </div>


        </form>
    </div>

    </div>










    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/add_student.js') }}"></script>
@endsection
