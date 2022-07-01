<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assestant</title>
    <link href="{{ asset('css/admin_styles/error_load.css') }}" rel="stylesheet" />

    <link href='{{ asset('css/app.css') }}' rel="stylesheet" />
    <link href='{{ asset('css/student.css') }}' rel="stylesheet" />

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/student.css') }}" rel="stylesheet" />

    </head>

    <body>
        <div class="main">

            <div class="student_top_header bg-gradient-to-r from-cyan-500 to-blue-500">
                <div class="type_name">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <h1> Assestant <span> {{ $req->username }} </span> </h1>
                </div>
                {{-- <input type="checkbox" id="active">
          <label for="active" class="menu-btn"><span></span></label>
          <label for="active" class="close"></label> --}}
                {{-- <div class="wrapper">
              <ul>
                <li><a href="#">Media</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Feedback</a></li>
              </ul>
          </div> --}}
            </div>
            <div class="student_left_actions bg-dark">
                <ul>
                    <li
                        style="font-size: 30px;margin-bottom:20px;background-color:rgb(28, 28, 130);padding-left:10px;margin-top:30px">
                        Dashport </li>
                    <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                            fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                        </svg><a href="{{ route('show_table', ['username' => $req->username]) }}"> See Schedule </a></li>
                    <li class="text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-chat-right-dots-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg>
                        <a href="{{ route('ass_suggestion', ['username' => $req->username]) }}">Make Suggestions </a>
                    </li>


                </ul>
            </div>
            <div id="app" class="bg-secondary">
                <div>
                    @yield('content')
                </div>


                <div class="loading">
                    <h2><b> <strong> Unexpected Error </strong> </b> <b>:(</b></h2>
                    <h2><b> You cannot add a new field in this place.<br>
                            This place is full </b></h2>
                    <div class="gears">
                        <div class="gear one">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="gear two">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                        <div class="gear three">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    </html>
