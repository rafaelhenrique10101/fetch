<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enoove - Fetch</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
	<!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href={{ asset('css/font.css') }}>
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href={{ asset('css/google_fonts.css') }}>
    <!-- theme stylesheet-->
    <link rel="stylesheet" href={{ asset('css/style.default.premium.css') }} id="theme-stylesheet">
    <link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href={{ asset('css/custom.css') }}>
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src={{ asset('js/html5shiv.min.js') }}></script>
    <script src={{ asset('js/respond.min.js') }}></script><![endif]-->
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"> </script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.cookie.js') }}"> </script>
	<script src="{{ asset('js/Chart.min.js') }}"></script>
	<script src="{{ asset('js/charts-home.js') }}"></script>
	<!-- Notifications-->
	<!--<script src="{{ asset('js/messenger.min.js') }}">   </script>
	<script src="{{ asset('js/messenger-theme-flat.js') }}"></script> -->
	<script src="{{ asset('js/home-premium.js') }}"> </script>
	<script src="{{ asset('js/front.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	
    <!-- Google Font -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		  
	
</head>
<body>
<ul id="id_container_alert" class="messenger messenger-fixed messenger-on-top messenger-on-right messenger-theme-flat messenger-empty">
    <li class="messenger-message-slot">                    
        <div class="messenger-message message alert success message-success alert-success messenger-will-hide-after" id="id_tipo_notificacao">
            <button type="button" class="messenger-close" data-dismiss="alert">×</button>
            <div class="messenger-message-inner" id="id_msg_notificacao">
                
            </div>
            <div class="messenger-spinner">
                <span class="messenger-spinner-side messenger-spinner-side-left">
                    <span class="messenger-spinner-fill"></span>
                </span>
                <span class="messenger-spinner-side messenger-spinner-side-right">
                    <span class="messenger-spinner-fill"></span>
                </span>
            </div>
        </div>
    </li>
</ul>

@yield('body')	

</body>
</html>
