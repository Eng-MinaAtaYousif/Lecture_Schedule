@extends('layouts.student')
<style>
    .loading{
        display: none
    }
</style>
<link href="{{asset('css/department_info.css')}}" rel="stylesheet"/>
@section('content')
<div class="container emp-profile">
   
    @foreach($data as $d)
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>Student</th>
          <th>Info</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>Name</th>
          <th>{{$d->name}}</th>
        </tr>
        <tr>
          <th>ID</th>
          <th>{{$d->_ID_}}</th>
        </tr>
        <tr>
          <th>Username</th>
          <th>{{$d->username}}</th>
        </tr>
        <tr>
          <th>Password</th>
          <th>{{$d->password}}</th>
        </tr>
        <tr>
          <th>Phone</th>
          <th>{{$d->phone}}</th>
        </tr>
        <tr>
          <th>Email</th>
          <th>{{$d->email}}</th>
        </tr>
        <tr>
          <th>Department</th>
          <th>{{$d->department}}</th>
        </tr>
        <tr>
          <th>Level</th>
          <th>{{$d->level}}</th>
        </tr>
       
      </tbody>
    </table>
    @endforeach

  





    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/student/dep_info.js')}}"></script>

</div>
@endsection