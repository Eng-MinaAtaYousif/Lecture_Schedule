<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>
       Success
    </title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/acept.css')}}" rel="stylesheet"/>
    

</head>
<body class="bg-gradient-to-r from-sky-500 to-indigo-200">
    <div class="container bg-gradient-to-r from-sky-500 to-indigo-500">

            <h1> Congratulations, you have added successfully </h1> 
            <div>
                <a href="{{route('admin_add_student',['username'=>$req->username])}}" class="send btn btn-primary bg-blue-700"> Add Again </a>
                <a href="{{url('/')}}" class="send btn btn-primary bg-blue-700"> Quite </a>
            </div>
           

            
    </div>

    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
   

</body>
</html>