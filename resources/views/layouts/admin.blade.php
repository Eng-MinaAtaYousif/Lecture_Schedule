<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href='{{ asset('css/app.css') }}' rel="stylesheet" />
    <link href="{{ asset('css/admin_styles/error_load.css') }}" rel="stylesheet" />

    <link href='{{ asset('css/student.css') }}' rel="stylesheet" />

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
                <h1> Admin <span> {{ $req->username }} </span></h1>
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
                        fill="currentColor" class="bi bi-file-spreadsheet-fill" viewBox="0 0 16 16">
                        <path
                            d="M12 0H4a2 2 0 0 0-2 2v4h12V2a2 2 0 0 0-2-2zm2 7h-4v2h4V7zm0 3h-4v2h4v-2zm0 3h-4v3h2a2 2 0 0 0 2-2v-1zm-5 3v-3H6v3h3zm-4 0v-3H2v1a2 2 0 0 0 2 2h1zm-3-4h3v-2H2v2zm0-3h3V7H2v2zm4 0V7h3v2H6zm0 1h3v2H6v-2z" />
                    </svg><a href="{{ route('admin_create_schedule', ['username' => $req->username]) }}">Create
                        Schedule</a></li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                        <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z" />
                        <path
                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                    </svg><a href="{{ route('admin_delete_id', ['username' => $req->username]) }}"> Delete / Modify ID
                    </a>
                </li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg><a href="{{ route('admin_add_student', ['username' => $req->username]) }}"> Add Student </a>
                </li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                        <path fill-rule="evenodd"
                            d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg><a href="{{ route('admin_add_doctor_or_assestant', ['username' => $req->username]) }}"> Add
                        Doctor / Assestant </a></li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-file-spreadsheet" viewBox="0 0 16 16">
                        <path
                            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z" />
                    </svg><a href="{{ route('show_table', ['username' => $req->username]) }}"> See Schedule </a></li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                        <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z" />
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z" />
                    </svg><a href="{{ route('admin_edit_schedule', ['username' => $req->username]) }}">Edit
                        Schedule</a>
                </li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg><a href="{{ route('delete_table', ['username' => $req->username]) }}">Delete Schedule</a>
                </li>
                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg><a href="{{ route('admin_search', ['username' => $req->username]) }}"> Search </a></li>

                <li class="text-blue-700"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                        fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                    </svg><a href="{{ route('get_all_st', ['username' => $req->username]) }}"> Students </a></li>
                {{-- notification link --}}
                {{-- @if ($count)
           
                <a class="not" href="{{ route('not', ['username' => $req->username]) }}">
                    <div class="notification-box">
                        <span class="notification-count">{{$count}} </span>
                        <div class="notification-bell">
                            <span class="bell-top"></span>
                            <span class="bell-middle"></span>
                            <span class="bell-bottom"></span>
                            <span class="bell-rad"></span>
                        </div>
                    </div>
                  
                </a>
               @endif --}}

                <li class="text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    <a href="{{ route('not', ['username' => $req->username]) }}"> Notifications </a>

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
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/notif.js') }}"></script>
</body>

</html>
