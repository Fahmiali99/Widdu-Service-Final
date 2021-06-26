<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <!-- "fonts/icomoon/style.css" -->
    <link rel="stylesheet" href="{{ asset('login-admin/fonts/icomoon/style.css') }}">
    <!-- "css/owl.carousel.min.css" -->
    <link rel="stylesheet" href="{{ asset('login-admin/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <!-- "css/bootstrap.min.css" -->
    <link rel="stylesheet" href="{{ asset('login-admin/css/bootstrap.min.css') }}">

    <!-- Style -->
    <!-- css/style.css -->
    <link rel="stylesheet" href="{{ asset('login-admin/css/style.css') }}">

    <title>Login #7</title>
</head>

<body>

    <style>
    #judul-logo {
        font-family: ui-sans-serif;
        font-weight: 900;
        letter-spacing: 1px;
        display: flex;
        justify-content: center;
        font-size: 35px;
    }
    </style>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('login-admin/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
                </div>
                <br><br><br>
                <div class="col-md-6 contents">
                    <br><br><br><br>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h1 id="judul-logo">Admin Widdu</h1>

                            </div>
                            <form method="POST" action="{{route('auth.login')}}">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">

                                    </label>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">


                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    @if(session('fail'))

    {{session('fail')}}
    @endif


    <script src="{{ asset('login-admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login-admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('login-admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login-admin/js/main.js') }}"></script>
</body>

</html>