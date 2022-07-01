<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search_Data by username and password </title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/admin_styles/search.css')}}" rel="stylesheet"/>
</head>
<body>
    <div class="data w-96">

        <div class="load">
            <div class="loader"></div>
            <p > Please wait for  Download Data</p>
        </div>      
        
        <div class="real-data"> 
             <ul>
                @forelse($D_o_A as $lecturer)
                <table class="table table-striped table-dark">
                    <thead>
                       <tr>
                            <td>#</td>
                            <td>_ID_</td>
                            <td>Name</td>
                            <td>email</td>
                            <td>username</td>
                            <td>password</td>
                            <td>Job</td>


                     </tr>
                      <tr class="table-active">
                        <th >{{$lecturer -> id}}</th>
                        <th>{{$lecturer -> _ID_}}</th>
                        <th>{{$lecturer -> name}}</th>
                        <th>{{$lecturer -> email}}</th>
                        <th>{{$lecturer -> username}}</th>
                        <th>{{$lecturer -> password}}</th>
                        <th>{{$lecturer -> D_or_A}}</th>

                      </tr>
               
                  </table>
                @empty
                <h1 class="wrong_id"> Sorry ; there is no data may be query is wrong or username /\ password not found</h1>

                @endforelse

             </ul>

             {{-- for student --}}
             <ul>
                @forelse($students as $student)
                <table class="table table-striped table-dark">
                    <thead>
                       <tr>
                            <td>#</td>
                            <td>_ID_</td>
                            <td>Name</td>
                            <td>email</td>
                            <td>username</td>
                            <td>password</td>
                            <td>Job</td>


                     </tr>
                      <tr class="table-active">
                        <th>{{$student -> id}}</th>
                        <th>{{$student -> _ID_}}</th>
                        <th>{{$student -> name}}</th>
                        <th>{{$student -> email}}</th>
                        <th>{{$student -> username}}</th>
                        <th>{{$student -> password}}</th>
                        <th>student</th>

                      </tr>
               
                  </table>
                @empty
                <h1 class="wrong_username"> Sorry ; there is no data may be query is wrong or username /\ password  not found</h1>

                @endforelse

             </ul>
             
        </div>

        <a href="{{route('admin_search',['username'=>$req->username])}}" class="btn btn-danger">  
            Ok
        </a>
     </div>

      <script src="{{asset('js/app.js')}}"></script>
      <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
      <script src="{{asset('js/admin/search.js')}}"></script>
</body>
</html>