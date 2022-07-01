<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset_Password</title>
    <link href="{{ asset('css/reset_password.css') }}" rel="stylesheet" />

</head>

<body>



    <div id="id01" class="modal">
        <form class="modal-content" action="{{ url('/your_password') }}">
            <div class="container">
                <h1> Get lost password</h1>
                <p>Please fill in this form to to search about your password.</p>
                <hr>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="id"><b>ID</b></label>
                <input type="text" placeholder="Enter Your ID" name="_id_" required>

                <div class="clearfix">
                    <a href="{{ route('user_auth.login_page') }}" class="cancelbtn a1">Cancel</a>
                    <button type="submit" class="signupbtn">Get Password</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        // var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //   if (event.target == modal) {
        //     modal.style.display = "none";
        //   }
        // }
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
</body>

</html>
