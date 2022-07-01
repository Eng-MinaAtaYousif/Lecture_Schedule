@extends('layouts.admin')
<link href="{{asset('css/app.css')}}" rel="stylesheet"/>
<link href="{{asset('css/admin_styles/delete_modify_id.css')}}" rel="stylesheet"/>
{{-- <link href="{{asset('css/admin_styles/create_schedule.css')}}" rel="stylesheet"/> --}}
<link href="{{asset('css/admin_styles/add_student.css')}}" rel="stylesheet"/>
<link href="{{asset('css/admin_styles/add_doctor_assestant.css')}}" rel="stylesheet"/>

@section('content')
   



<div class="container">
    <h1> Update Doctor /\ Assestant </h1>
    <div class="actully_modify_id">
      
        <form class="form-inline">
            <div class="radio">
                <label>
                  <input type="radio" name="DoA"  value="doctor" checked required>
                    Doctor
                </label>
                <label>
                    <input type="radio" name="DoA"  value="assestant" checked required>
                      Assestant
                  </label>
                </div>
            <div class="form-group">
              <label for="name"> Name </label>
              <input type="text" name="name" class="form-control" id="name" required placeholder="name">
            </div>
            <div class="form-group">
                <label for="id"> ID </label>
                <input type="number" name="id" class="form-control" id="id" required placeholder="ID">
              </div>
          
              <div class="form-group">
                <label for="ph"> Phone </label>
                <input type="number" name="phone" class="form-control" id="ph" required placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" name="email" class="form-control" id="email" required placeholder="Email">
              </div>
          
              <div class="form-group">
                <label for="subject"> Subject </label>
                <input type="text" name="subject" class="form-control" id="subject" required placeholder="Subject">
              </div>
          
            <button type="submit"  class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete"> Update </button>
    
          </form>   
          <a style="width: 100%;margin-bottom:50px" href="{{url('/admin/modify_information')}}" class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete"> Back </a>

    </div>

</div>










<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>

@endsection