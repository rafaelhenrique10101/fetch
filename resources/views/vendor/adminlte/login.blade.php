<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Fetch</title>

    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- Site CSS -->
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="login">
    <!-- Login -->
    <div class="login__block toggled" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            Hi there! Please Sign in

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-register" href="">Create an account</a></li>
                        <li><a data-block="#l-forget-password" href="">Forgot password?</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <form action="{{route('login')}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <label>Email Address</label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <label>Password</label>
                    <i class="form-group__bar"></i>
                </div>

                <button class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-long-arrow-right"></i></button>
            </form>
        </div>
    </div>

    <!-- Register -->
    <div class="login__block" id="l-register">
        <div class="login__block__header palette-Blue bg">
            <i class="zmdi zmdi-account-circle"></i>
            Create an account

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-login" href="">Already have an account?</a></li>
                        <li><a data-block="#l-forget-password" href="">Forgot password?</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <div class="form-group form-group--float form-group--centered">
                <input type="text" class="form-control">
                <label>Name</label>
                <i class="form-group__bar"></i>
            </div>

            <div class="form-group form-group--float form-group--centered">
                <input type="text" class="form-control">
                <label>Email Address</label>
                <i class="form-group__bar"></i>
            </div>

            <div class="form-group form-group--float form-group--centered">
                <input type="password" class="form-control">
                <label>Password</label>
                <i class="form-group__bar"></i>
            </div>

            <div class="input-centered">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        <i class="input-helper"></i>
                        Accept the license agreement
                    </label>
                </div>
            </div>

            <button class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-plus"></i></button>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="login__block" id="l-forget-password">
        <div class="login__block__header palette-Purple bg">
            <i class="zmdi zmdi-account-circle"></i>
            Forgot Password?

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-login" href="">Already have an account?</a></li>
                        <li><a data-block="#l-register" href="">Create an account</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="login__block__body">
            <p class="m-t-30">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

            <div class="form-group form-group--float form-group--centered">
                <input type="text" class="form-control">
                <label>Email Address</label>
                <i class="form-group__bar"></i>
            </div>

            <button class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-check"></i></button>
        </div>
    </div>
</div>

<!-- Older IE Warning -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="ie-warning__container">
        <ul class="ie-warning__download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="img/browsers/chrome.png" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="img/browsers/firefox.png" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="img/browsers/safari.png" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<!-- Javascript Libraries -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->

<!-- Site Functions & Actions -->
<script src="js/app.min.js"></script>
</body>
</html>