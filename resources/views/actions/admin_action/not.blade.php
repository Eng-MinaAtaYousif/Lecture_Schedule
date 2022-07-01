@extends('layouts.admin')
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> --}}
<link href="{{ asset('css/admin_styles/not.css') }}" rel="stylesheet" />
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">

        @foreach ($paginate as $a)
            <div class="container profile-page">
                <div class="row">


                    <div class="n col-xl-9 col-lg-9 col-md-9">


                        <div class="card profile-header alert-dismissible alert" role="alert">

                            <div class="body">

                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-12">

                                        <div class="profile-image float-md-right">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>

                                        </div>

                                    </div>

                                    <div class="col-lg-8 col-md-8 col-12" style="margin-top: 20px">
                                        <h4 class="m-t-0 m-b-0" style="margin-bottom: 10px"><strong> {{ $a->username }}
                                            </strong></h4>
                                        <span class="job_post"
                                            style="padding-bottom: 20px;font-size:10px">{{ $a->date }}
                                            {{ $a->time }}</span>
                                        <p style="margin-bottom: 10px;margin-top:10px">{{ $a->suggestion }}</p>
                                        <div>
                                            <button class="btn btn-primary btn-round" style="margin-bottom: 10px;"
                                                class="btn-close" data-bs-dismiss="alert">Forgit now</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            {{-- <span class="margin-top:10px"> {{ $a->id }}</span> --}}

                        </div>

                    </div>

                    @once
                        <audio src="{{ asset('audios/notifications.ogg') }}" autoplay controls style="display: none"
                            id="sound"></audio>
                    @endonce
        @endforeach


        <ul class="wrapper" style="">
            <li class="icon facebook">
                <span class="tooltip">remove All</span>

                <span>
                    <a href="{{ route('delete', ['username' => $req->username]) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-trash3" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                    </a>
                </span>

            </li>
            {{-- <li class="icon twitter">
                <span class="tooltip">Chack</span>
                <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                            <path
                                d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            <path
                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        </svg></a></span>
            </li>
            <li class="icon instagram">
                <span class="tooltip">Doctors</span>
                <span><a href="{{route('doctors',['username'=>$req->username])}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg></a></span>
            </li>
            <li class="icon github">
                <span class="tooltip">Assestants</span>
                <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg></a></span>
            </li>
            <li class="icon youtube">
                <span class="tooltip">Students</span>
                <span><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                            <path
                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                        </svg> </a></span>
            </li> --}}
        </ul>



        @if ($count)
            <a class="not-ball" href="{{ route('not', ['username' => $req->username]) }}">
                <div class="notification-box">
                    <span class="notification-count">{{ $count }} </span>
                    <div class="notification-bell">
                        <span class="bell-top"></span>
                        <span class="bell-middle"></span>
                        <span class="bell-bottom"></span>
                        <span class="bell-rad"></span>
                    </div>
                </div>

            </a>
        @endif




        <div class="form-inline">
            {{-- {{ $paginate->links() }} --}}
            <nav aria-label="Page navigation example justify-content-center">
                <ul class="pagination  justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="21.5" height="21.5" fill="currentColor"
                                class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=1']) }}">1</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=2']) }}">2</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=3']) }}">3</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=4']) }}">4</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=5']) }}">5</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=6']) }}">6</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=7']) }}">7</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=8']) }}">8</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=9']) }}">9</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                            href="{{ route('not_page', ['username' => $req->username, 'page' => '?page=10']) }}">10</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="21.5"
                                height="21.5" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/not.js') }}"></script>
@endsection
