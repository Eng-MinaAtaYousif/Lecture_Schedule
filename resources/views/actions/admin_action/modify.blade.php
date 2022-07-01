<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modify</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    {{-- <link href="{{asset('css/admin_styles/search.css')}}" rel="stylesheet"/> --}}

    <link href="{{ asset('css/admin_styles/delete_id.css') }}" rel="stylesheet" />
    <style>
        .loading {
            display: none
        }
    </style>
</head>

<body>
    <div class="data w-96">
        <div>
            <div id="myProgress">
                <div id="myBar">0%</div>
            </div>

            <a href="{{ url('/admin/delete_id') }}" style="display: block" class="btn btn-danger">
                Wait for delete
            </a>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/delete_id.js') }}"></script>
    {{-- <script src="{{asset('js/admin/search.js')}}"></script> --}}
</body>

</html>
