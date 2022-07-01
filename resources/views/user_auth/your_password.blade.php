<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>
        Your Password
    </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/login.js') }}"></script>

</head>

<body class="bg-gradient-to-r from-sky-500 to-indigo-200">

    <div id="id01" class="modal">

        <form class="modal-content animate" action="{{ url('/layouts') }}" method="POST"
            enctype="application/x-www-form-urlencoded">
            @csrf


            <div class="container">
                <label for="uname"><b>Username</b></label>
                <p class="uname alert alert-primary d-flex align-items-center" role="alert"
                    style="padding-left: 30px">
                    @foreach ($data as $d1)
                        {{ $d1->username }}
                    @endforeach
                    @forelse($data2 as $d2)
                        {{ $d2->username }}
                    @empty
                        {{-- !!!! Sory no data !!!! --}}
                    @endforelse

                </p>
                </label>
                <label for="psw"><b>Password</b></label>
                <p class="pass alert alert-primary d-flex align-items-center" role="alert" style="padding-left: 30px">
                    @foreach ($data as $d1)
                        {{ $d1->password }}
                    @endforeach
                    @forelse($data2 as $d2)
                        {{ $d2->password }}
                    @empty
                        {{-- !!!! Sory no data !!!! --}}
                    @endforelse
                </p>

                </label>

                <a href="{{ route('user_auth.login_page') }}" class="btn btn-danger"
                    style="background-color: #dc3545;width:100%">Go to login</a>
            </div>


        </form>
    </div>
    <script>
        var username, password;

        username = document.getElementsByClassName('uname')[0];
        password = document.getElementsByClassName('pass')[0];

        // if (username.textContent == '') {
        //     username.textContent = '!!!! Sorry no data  !!!!';
        // }
        // if (password.textContent == '') {
        //     password.textContent = '!!!! Sorry no data  !!!! ';

        // }
    </script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
