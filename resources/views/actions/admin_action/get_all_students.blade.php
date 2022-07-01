<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search_Data</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin_styles/search.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin_styles/get_all_students.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="data w-96">

        <div class="load">
            <div class="loader"></div>
            <p> Please wait for Download Data</p>
        </div>

        <div class="real-data">

            {{-- for student --}}
            <ul>

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>_ID_</td>
                            <td>Name</td>
                            <td>email</td>
                            <td>username</td>
                            <td>password</td>
                            <td>Department</td>
                            <td>Level</td>
                            <td></td>


                        </tr>
                        @forelse($students as $student)
                            <tr class="table-active">

                                <th>{{ $student->id }}</th>
                                <th>{{ $student->_ID_ }}</th>
                                <th>{{ $student->name }}</th>
                                <th>{{ $student->email }}</th>
                                <th>{{ $student->username }}</th>
                                <th>{{ $student->password }}</th>
                                <th>{{ $student->department }}</th>
                                <th>{{ $student->level }}</th>
                                <th>student</th>

                            </tr>
                        @empty
                        @endforelse
                </table>

                {{-- <div>{{$paginate->links()}}</div> --}}

        </div>

        <a href="{{ route('admin', ['username' => $req->username]) }}" class="btn btn-danger">
            Ok
        </a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/admin/search.js') }}"></script>
</body>

</html>
