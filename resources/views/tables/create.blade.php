

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tables</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/table/create.css') }}" rel="stylesheet" />
    {{-- <script src="{{ asset('js/table/create.js') }}"></script> --}}
</head>

<body>
    <div class="container main">
        <form class="navbar-form navbar-left">
            <div class="form-group">
                <input type="text" id="search_i" class="btn-defaul search_i" placeholder="Search abut table">
            </div>
            <button type="button" id="search" onclick="search()"
                class="btn bg-gradient-to-r from-sky-500 to-indigo-500 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>

            </button>
        </form>
        <div>
            <div class="up"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                </svg>
            </div>
            {{-- ***************************** --}}

            {{-- ***************************** --}}

            {{-- table one general --}}
            <div>
                <table class="table t1-g table-dark">
                    <h1> Table For level one general</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->from == 6 && $data->to == 8 && $data->day == 'Tuesday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_one_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>



            </div>
            {{-- ************************* table two general *************************************************************************** --}}
            <div>
                <table class="table t2-g table-dark">
                    <h1> Table For level two general</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_two_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- ***************** table three general ******************* --}}
            <div>
                <table class="table t3-g table-dark">
                    <h1> Table For level three general</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_three_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- ***************************table four general********************************** --}}
            <div>
                <table class="table t4-g table-dark">
                    <h1> Table For level four general</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_four_general')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
            {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
            {{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
            {{-- table  one bio --}}
            <div>
                <table class="table t1-b table-dark">
                    <h1> Table For level one bio</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_one_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- ************************* level two bio **************************************** --}}
            <div>
                <table class="table t2-b table-dark">
                    <h1> Table For level two bio</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_two_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>
            {{-- ***************** level three bio ******************* --}}
            <div>
                <table class="table t3-b table-dark">
                    <h1> Table For level three bio</h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_three_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>

            {{-- ***************************level four bio********************************** --}}
            <div>
                <table class="table t4-b table-dark">
                    <h1> Table For level four bio </h1>
                    <tbody>

                        <tr>
                            <th>Saturday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Saturday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Sunday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Sunday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Monday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Monday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>
                        <tr>
                            <th>Tuesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Tuesday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Wednesday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Wednesday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach


                        </tr>

                        <tr>
                            <th>Thursday</th>
                            @foreach ($relation_day as $mydata)
                                @foreach ($mydata->day_subject as $data)
                                    @if ($data->day == 'Thursday' && $data->level == 'level_four_bio')
                                        <th>
                                            - from : {{ $data->from }}<br>
                                            - to : {{ $data->to }}<br>
                                            - {{ $data->LoS }}<br>
                                            <div>
                                                - <svg xmlns="http://www.w3.org/2000/svg" width="13"
                                                    height="13" fill="currentColor" class="bi bi-person-circle"
                                                    viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                    <path fill-rule="evenodd"
                                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                                </svg> : {{ $data->name }}
                                            </div>
                                            - sub : {{ $data->subject_name }}<br>
                                            - level : {{ $data->hall_floor }}
                                            - room : {{ $data->hall_number }}
                                        </th>
                                    @endif
                                @endforeach
                            @endforeach

                        </tr>

                    </tbody>
                </table>
            </div>

            {{-- ******************************** --}}

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
        <script src='{{ asset('js/table/create.js') }}'></script>

    </div>
</body>

</html>
