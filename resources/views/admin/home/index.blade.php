@extends('adminlte::page')

@section('content')
<div class="page-header">
	<div class="container-fluid">
	<h2 class="h5 no-margin-bottom" id="id_title_view">Dashboard</h2>
	</div>
</div>
<section class="margin-bottom-sm">
	<div class="container-fluid">
		<div class="row d-flex align-items-stretch">
			<div class="col-lg-4">
				<div class="stats-with-chart-1 block">
					<div class="title"> <strong class="d-block">Saldo</strong><span class="d-block">Dispon&iacute;vel para recarga</span></div>
					<div class="row d-flex align-items-end justify-content-between">
						<div class="col-5">
							<div class="text"><strong class="d-block dashtext-3">R$ {{ number_format($result['amount'], 2, ',', '') }}</strong><span class="d-block">Fev 2018</span><small class="d-block">3 Recargas este m&ecirc;s</small></div>
						</div>
						<div class="col-7">
							<div class="bar-chart chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
							<canvas id="salesBarChart1" width="256" height="128" class="chartjs-render-monitor" style="display: block; width: 256px; height: 128px;"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
@stop