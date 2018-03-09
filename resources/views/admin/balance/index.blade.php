@extends('adminlte::page')

@section('content')
<div class="page-header no-margin-bottom">
    <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Saldo de recarga</h2>
    </div>
</div>
<div class="container-fluid padding-header-btn-actions">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dahboard</a></li>
        <li class="breadcrumb-item active">Saldo de recarga</li>
        <div class="container-btn-primary-pink">            
        @if ($balance['amount'] > 0)
            <input type="submit" value="Sacar" class="btn-primary-grey" id="id_btn_sacar">
        @endif
            <input type="submit" value="Recarregar" class="btn-primary-pink" id="id_btn_carregar">
        </div>
    </ul>
</div>
<section class="margin-bottom-sm">
	<div class="container-fluid">
		<div class="row d-flex align-items-stretch">
			<div class="col-lg-4">
				<div class="stats-with-chart-1 block" style="height: calc(100% - 30px);">
					<div class="title"> <strong class="d-block">Saldo</strong><span class="d-block">Dispon&iacute;vel para recarga</span></div>
					<div class="row d-flex align-items-end justify-content-between">
						<div class="col-5">
							<div class="text"><strong class="d-block dashtext-3">R$ {{ number_format($balance['amount'], 2, ',', '.') }}</strong><span class="d-block">Fev 2018</span><small class="d-block">3 Recargas este m&ecirc;s</small></div>
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
<section class="no-padding-bottom">
    <div class="container-fluid title-section-margin">
        <h2 class="h5 no-margin-bottom">Hist&oacute;rico de recargas</h2>
        <span class="d-block">Acompanhe abaixo suas &uacute;ltimas 5 recargas</span>
    </div>
    <div class="container-fluid">    
        @foreach($historics as $historic)

            <div class="public-user-block block">
                <div class="row d-flex align-items-center">                   
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="order">{{ $historic->id }}</div>
                            <div class="avatar"> 
                                <img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-1.jpg" class="img-fluid">
                            </div>
                            <a href="#" class="name">
                                <strong class="d-block">
                                
                                @if ($historic->type == 'I')
                                    Recarga
                                @endif
                                @if ($historic->type == 'O')
                                    Saque
                                @endif
                                @if ($historic->type == 'T')
                                    Transferencia
                                @endif
                                
                                </strong>
                                <span class="d-block">@tomhecktor</span>
                            </a>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="contributions">410 Contributions</div>
                        </div>
                        <div class="col-lg-4">
                            <div class="details d-flex">
                            <div class="item"><i class="icon-info"></i><strong>{{ $historic->total_before }}</strong></div>
                            <div class="item"><i class="fa fa-gg"></i><strong>{{ $historic->amount }}</strong></div>
                            <div class="item"><i class="icon-flow-branch"></i><strong>{{ $historic->total_after }}</strong></div>
                            </div>
                        </div>
                    </div>
                </div>            
        
        @endforeach
    
    </div>
</section>
@stop