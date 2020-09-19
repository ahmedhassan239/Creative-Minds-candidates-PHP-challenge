<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login')) --}}
                <div class="top-right links">
                    {{-- @auth --}}
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                    {{-- @else --}}
                        <a href="/login">Login</a>

                        {{-- @if (Route::has('register')) --}}
                            <a href="/signup">Register</a>
                        {{-- @endif --}}
                    {{-- @endauth --}}
                </div>
            {{-- @endif --}}

            <div class="content">
                <div class="title m-b-md">
                   Creative Minds candidates PHP challenge <br>
                    -Ahmed Hassan El Sayed-
                </div>

                <div class="links">
                    <a href="https://www.linkedin.com/in/ahmed-hassan239/">Linkedin</a>
                    <a href="https://wuzzuf.net/me/ahmedhassn">wuzzuf</a>
                    <a href="https://www.upwork.com/freelancers/~019429c30871abce6e">Upwork</a>
                    <a href="https://github.com/ahmedhassan239">GitHub</a>
                </div>

                {{-- <a href="" class="btn btn-success">Register</a> --}}
            </div>
        </div>
    </body>
</html>
