<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error!!</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/error.css') }}" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Tomorrow', sans-serif;
            height: 100vh;
            background-image: linear-gradient(to top, #2e1753, #1f1746, #141645, #1c245c, #060a24);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .text {
            position: absolute;
            top: 30%;
            color: #fff;
            text-align: center;
        }

        .text>div {
            font-size: 30px;
            border: none;

        }

        .text>a {
            width: 50%;
            margin-top: 20px
        }

        hr {
            margin-bottom: 10px
        }

        h1 {
            font-size: 60px;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #fff;
            right: 0;
            animation: starTwinkle 3s infinite linear;
        }

        .astronaut img {
            width: 100px;
            position: absolute;
            top: 55%;
            animation: astronautFly 6s infinite linear;
        }

        @keyframes astronautFly {
            0% {
                left: -100px;
            }

            25% {
                top: 50%;
                transform: rotate(30deg);
            }

            50% {
                transform: rotate(45deg);
                top: 55%;
            }

            75% {
                top: 60%;
                transform: rotate(30deg);
            }

            100% {
                left: 110%;
                transform: rotate(45deg);
            }
        }

        @keyframes starTwinkle {
            0% {
                background: rgba(255, 255, 255, 0.4);
            }

            25% {
                background: rgba(255, 255, 255, 0.8);
            }

            50% {
                background: rgba(255, 255, 255, 1);
            }

            75% {
                background: rgba(255, 255, 255, 0.8);
            }

            100% {
                background: rgba(255, 255, 255, 0.4);
            }
        }
    </style>
</head>

<body>

    <div class="text">
        <div>ERROR</div>
        <h1>404</h1>
        <hr>
        <div>Page Not Found May Be Username Or Password Is Error </div>
        <a href="{{ route('user_auth.login_page') }}" class="btn btn-success"> Try Again </a>
    </div>

    <div class="astronaut">
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/user_auth/error.js') }}"></script>
</body>

</html>
