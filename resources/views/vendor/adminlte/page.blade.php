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
		<div style="float: left;position: relative;width: 100%;height: 100px;">
		
		</div>	
		<!-- MENU PRINCIPAL AQUI -->
		<div style="padding: 20px 0px;width: 100%;float: left;">
			<a href="#" style="float: left;position: relative;width: 100%;">
				<div class="navigation__active" style="height: 50px;line-height: 50px;padding: 0 25px;border-left: solid 4px #fc7c9b;">
					<div style="float: left;position: relative;top: 12px;height: 24px;padding-right: 15px;">
						<img src="img/icons/svg/ic_dashboard_white_24px.svg" style="position: relative;float: left;">
					</div>
					<span style="font: 400 14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;color: #b4bfc3;">Dashboard</span>
				</div>
			</a>
			<a href="#" style="float: left;position: relative;width: 100%;">
				<div class="navigation__active" style="height: 50px;line-height: 50px;padding: 0 25px;border-left: solid 4px transparent;">
					<div style="float: left;position: relative;top: 12px;height: 24px;padding-right: 15px;">
						<img src="img/icons/svg/ic_assessment_white_24px.svg" style="position: relative;float: left;">
					</div>
					<span style="font: 400 14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;color: #b4bfc3;">Relatórios</span>
				</div>
			</a>
			<a href="#" style="float: left;position: relative;width: 100%;">
				<div class="navigation__active" style="height: 50px;line-height: 50px;padding: 0 25px;border-left: solid 4px transparent;">
					<div style="float: left;position: relative;top: 12px;height: 24px;padding-right: 15px;">
						<img src="img/icons/svg/ic_search_white_24px.svg" style="position: relative;float: left;">
					</div>
					<span style="font: 400 14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;color: #b4bfc3;">Rastrear conteúdo</span>
				</div>
			</a>
			<a href="#" style="float: left;position: relative;width: 100%;">
				<div class="navigation__active" style="height: 50px;line-height: 50px;padding: 0 25px;border-left: solid 4px transparent;">
					<div style="float: left;position: relative;top: 12px;height: 24px;padding-right: 15px;">
						<img src="img/icons/svg/ic_settings_white_24px.svg" style="position: relative;float: left;">
					</div>
					<span style="font: 400 14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;color: #b4bfc3;">Configurações</span>
				</div>
			</a>
			<a href="#" style="float: left;position: relative;width: 100%;">
				<div class="navigation__active" style="height: 50px;line-height: 50px;padding: 0 25px;border-left: solid 4px transparent;">
					<div style="float: left;position: relative;top: 12px;height: 24px;padding-right: 15px;">
						<img src="img/icons/svg/ic_dashboard_white_24px.svg" style="position: relative;float: left;">
					</div>
					<span style="font: 400 14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;color: #b4bfc3;">Financeiro</span>
				</div>
			</a>
		</div>
	</aside>						
	<section id="content" style="width: calc(100% - 270px);height: calc(100% - 80px);float: left;position: absolute;bottom: 0;padding: 15px;">
		<!-- CONTENT PRINCIPAL AQUI -->
		@yield('content')
	</section> 
</section>
@stop
		