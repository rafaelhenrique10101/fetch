<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Fetch</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.premium.css" id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet" href="css/style.sea.premium.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script><![endif]-->
  <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/Chart.min.js"></script>
    <script src="js/front.js"></script>

</head>
<body>
    <div class="login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                <!-- Logo & Information Panel-->
                <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                    <div class="content">
                        <div class="logo">
                        <h1>Dashboard</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                    <div class="content">
                        <form id="login-form" action="{{route('login')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input id="login-username" type="email" name="email" required="" class="input-material" value="{{ old('email') }}" placeholder="{{ trans('adminlte::adminlte.email') }}">
                            <label for="login-username" class="label-material">Email</label>
                        </div>
                        <div class="form-group">
                            <input id="login-password" type="password" name="password" required="" class="input-material" >
                            <label for="login-password" class="label-material">Password</label>
                        </div>
                        <button id="login" class="btn btn-primary">Login</button>
                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                        </form>
                            <a href="#" class="forgot-pass">Forgot Password?</a><br>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </div>
    </div>
</body>
</html>