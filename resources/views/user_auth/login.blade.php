<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>
        Login
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/login.js') }}"></script>

</head>

<body class="bg-gradient-to-r from-sky-500 to-indigo-200">

    {{-- <h2>Modal Login Form</h2>

  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> --}}

    <div id="id01" class="modal">

        <form class="modal-content animate" action="{{ url('/layouts') }}" method="POST"
            enctype="application/x-www-form-urlencoded">
            @csrf

            <h2
                style="text-align: center;font-size:30px;font-family:Georgia, 'Times New Roman', Times, serif;margin-top:20px">
                Lecture Schedule </h2>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="uname" name="username" required>
                </label>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="psw" name="password" required>
                </label>

                <label for="Show-password">
                    <input type="checkbox" id="Show-password" onclick="myFunction()"> show password
                </label>

                <label>
                    <input type="radio" required name="type" value="doctor"> Doctor
                </label>
                <label>
                    <input type="radio" required name="type" value="assestant"> Assestant
                </label>

                <label>
                    <input type="radio" required name="type" value="admin"> Admin
                </label>
                <label>
                    <input type="radio" required name="type" value="student">Student
                </label>


                <button type="submit" class="send" style="background-color: green;">Login</button>



            </div>

            <div class="container" style="background-color:#f1f1f1">

                <span class="psw">Forgot <a href="{{ url('/reset_password') }}">password?</a></span>
            </div>
        </form>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{asset('js/user_auth/login.js')}}"></script> --}}

</body>

</html>
