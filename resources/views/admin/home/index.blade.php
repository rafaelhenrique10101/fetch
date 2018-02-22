@extends('adminlte::page')

@section('content')
<div class="column size-1of2">
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