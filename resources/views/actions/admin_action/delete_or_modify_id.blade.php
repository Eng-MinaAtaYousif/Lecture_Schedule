@extends('layouts.admin')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/delete_modify_id.css') }}" rel="stylesheet" />

<script src="{{ asset('js/app.js') }}"></script>
<style>
    .loading {
        display: none
    }
</style>
@section('content')
    <div class="container">
        <h1> Delete / \ Update Id </h1>
        <div class="body">
            <div class="delete_id bg-gradient-to-r from-cyan-900 to-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path
                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                </svg>
                <p> Delete Id </p>


                {{-- <div class="actully_delete_id">
                  delete
   
                </div> --}}
            </div>

            <div class="modify_id bg-gradient-to-r from-cyan-900 to-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                    <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z" />
                    <path
                        d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                </svg>
                <p> Edit Id</p>


                {{-- <div class="actully_modify_id">
                modify
              </div> --}}
            </div>

        </div>

        <div class="body actully">
            <div class="actully_delete_id">
                <form class="form-inline" action="{{ route('admin_del_s_a_d', ['username' => $req->username]) }}">
                    <div class="form-group">
                        <label for="d-id">Delete ID </label>
                        <input type="number" name="id" class="form-control" id="d-id" required
                            placeholder="Delete Id">
                    </div>

                    @error('id')
                        <p style=" color:rgb(183, 61, 61)" class="error">{{ $message }}</p>
                    @enderror



                    <button type="button" name="btn-delete"
                        class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete"> Delete Id </button>
                    {{-- <script>
                    var btn = document.getElementByClassName('btn-delete')[0];
                    btn.onclick = function (){
                       alert('ss');
                    }
                </script> --}}
                    <div class="alertmessage bg-gradient-to-r from-cyan-300 to-blue-500">

                        <h2 id="show"> </h2>
                        <button type="submit" class="btn btn-primary send bg-gradient-to-r from-sky-500 to-indigo-500"> Ok
                        </button>
                        <button type="button" class="btn btn-primary modify bg-gradient-to-r from-sky-500 to-indigo-500">
                            Edit </button>
                        <a type="button" class="btn btn-primary cancle bg-gradient-to-r from-sky-500 to-indigo-500"
                            href="{{ route('admin_delete_id', ['username' => $req->username]) }}"> Cancle </a>
                    </div>

                </form>

            </div>
            <div class="actully_modify_id">
                <form class="form-inline" action="{{ route('admin_modify_a_s_d', ['username' => $req->username]) }}">
                    <div class="form-group">
                        <label for="name"> Name </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="name">
                    </div>
                    @error('name')
                        <p style=" color:rgb(189, 63, 63)" class="error"> {{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    @error('email')
                        <p style=" color:rgb(191, 69, 69)" class="error"> {{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    @error('password')
                        <p style=" color:rgb(186, 66, 66)" class="error">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="old_id"> Old ID </label>
                        <input type="number" name="old_id" class="form-control" id="old_id" placeholder="Old ID">
                    </div>
                    @error('old_id')
                        <p style=" color:rgb(165, 69, 69)" class="error"> {{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="new_id"> New ID </label>
                        <input type="number" name="new_id" class="form-control" id="new_id" placeholder="New ID">
                    </div>
                    @error('new_id')
                        <p style=" color:rgb(164, 64, 64)" class="error">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary bg-gradient-to-r from-cyan-900 to-blue-700 btn-delete">
                        Update Id </button>

                </form>
            </div>
        </div>



    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/delete_modify_id.js') }}"></script>
@endsection
