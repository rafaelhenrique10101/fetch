@extends('adminlte::master')

@section('body')

<!-- Main Header -->
<section id="main">
	<header id="header">            		
		<form class="top-search">
			<input type="text" class="top-search__input" placeholder="Search for people, files &amp; reports">
			<i class="zmdi zmdi-search top-search__reset"></i>
		</form>
	</header>
	<aside id="navigation" style="background-color: #2c2d31;">	
		<!-- MENU PRINCIPAL AQUI -->
	</aside>						
	<section id="content" style="width: calc(100% - 270px);height: calc(100% - 80px);float: left;position: absolute;bottom: 0;">
		<!-- CONTENT PRINCIPAL AQUI -->
		@yield('content')
	</section> 
</section>			
		<!--<footer id="footer">
				@yield('footer')    
			</footer>
@yield('content')    
			-->

@stop
		