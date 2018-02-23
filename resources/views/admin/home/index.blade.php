@extends('adminlte::page')

@section('content')
<div class="margin-title-page">
<h3>Dashboard</h3>
</div>
<div class="card" style="background-color: transparent">
	<div class="card__header">		
		<div class="actions">
			<!--<div style="float: left;position: relative;padding: 10px 17px;border: solid 1.2px transparent;background: linear-gradient(to bottom,#f8967d,#ef7694);border-radius: 2px;">-->
    			<!--<span style="font: 600 13.1px Roboto,sans-serif;color: #fff;">Exportar relatório</span>-->
				<button class="btn">Gr&aacute;fico linear
					<img class="expand-more-icon" src="img/icons/svg/ic_expand_more_white_24px.svg"/>
				</button>
				<button class="btn">Semanal
					<img class="expand-more-icon" src="img/icons/svg/ic_expand_more_white_24px.svg"/>
				</button>
				<button class="btn btn--light">Sincronizar</button>
			<!--</div>-->
		</div>
		<div class="box-title">			
			<h4 class="text-white">Conteúdo
				<div class="legend-box-title_m1">
					<div class="button-rounded-legend bg-pink-light"></div>
					<h5 class="legend">Downloads</h5>
				</div>
				<div class="legend-box-title_m2">
					<div class="button-rounded-legend bg-purple-light"></div>
					<h5 class="legend">Publicado</h5>
				</div>
			</h4>			
		</div>		
	</div>
	<div class="flot-chart-edge" style="height: 250px;">
		
	</div>
</div>
<div class="column size-1of3">
	<div class="card widget-analytic">
		<div class="card__header">
			<h2>Saldo<small>Acompanhe seu saldo dispon&iacute;vel atualizado</small></h2>
			<div class="actions">
				<div class="dropdown">
					<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="">Refresh</a></li>
						<li><a href="">Manage</a></li>
						<li><a href="">Settings</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card__body">
			<div class="widget-analytic__info">
				<i class="zmdi zmdi-caret-down-circle"></i>
				<h2>R${{number_format($result['amount'], '2', ',', '')}}</h2>
			</div>
			<div class="widget-analytic__chart">
				<div class="chart-sparkline-line"><canvas width="441" height="50" style="display: inline-block; width: 441px; height: 50px; vertical-align: top;"></canvas></div>
			</div>
		</div>
	</div>
</div>
@stop