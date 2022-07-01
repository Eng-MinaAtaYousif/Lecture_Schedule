<title> Error !! </title>
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet" />
<link href="{{ asset('css/admin_styles/error_load.css') }}" rel="stylesheet" />

<body class="loading">

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
    <h3>
        <a href="{{ route('admin_create_schedule', ['username' => $req->username]) }}" style="font-size:25px;width:250px"
            class="justify-content-center btn btn-danger">Try Again</a>
    </h3>

    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/error_load.js') }}"></script>
    <script src="{{ asset('js/error_load.js') }}"></script>
</body>
