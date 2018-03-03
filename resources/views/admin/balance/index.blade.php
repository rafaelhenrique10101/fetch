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
        @if ($result['amount'] > 0)
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
							<div class="text"><strong class="d-block dashtext-3">R$ {{ number_format($result['amount'], 2, ',', '.') }}</strong><span class="d-block">Fev 2018</span><small class="d-block">3 Recargas este m&ecirc;s</small></div>
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
        <div class="public-user-block block">
            <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="order">4th</div>
                        <div class="avatar"> <img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-1.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Tomas Hecktor</strong><span class="d-block">@tomhecktor</span></a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="contributions">410 Contributions</div>
                    </div>
                    <div class="col-lg-4">
                        <div class="details d-flex">
                        <div class="item"><i class="icon-info"></i><strong>110</strong></div>
                        <div class="item"><i class="fa fa-gg"></i><strong>200</strong></div>
                        <div class="item"><i class="icon-flow-branch"></i><strong>100</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="public-user-block block">
                <div class="row d-flex align-items-center">                   
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="order">5th</div>
                        <div class="avatar"> <img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-2.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alexander Shelby</strong><span class="d-block">@alexshelby</span></a>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="contributions">320 Contributions</div>
                    </div>
                    <div class="col-lg-4">
                        <div class="details d-flex">
                            <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                            <div class="item"><i class="fa fa-gg"></i><strong>120</strong></div>
                            <div class="item"><i class="icon-flow-branch"></i><strong>50</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="public-user-block block">
                <div class="row d-flex align-items-center">                   
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="order">6th</div>
                            <div class="avatar"> <img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-6.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Arther Kooper</strong><span class="d-block">@artherkooper</span></a>
                        </div>
                        <div class="col-lg-4 text-center">
                        <div class="contributions">170 Contributions</div>
                    </div>
                    <div class="col-lg-4">
                        <div class="details d-flex">
                            <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                            <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                            <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="myModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><strong id="id_modal_title" class="modal-title">Realizar recarga</strong></div>
                <div class="modal-body">
                    <p>Informe abaixo o valor de recarga considerando os valores de R$ 15,00, R$ 25,00, R$ 50,00 e R$ 100,00</p>
                    <div style="width: 100%;height: 50px;">
                        <div class="input-group bootstrap-touchspin input-number-aling-center">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary bootstrap-touchspin-down" type="button" id="id_btn_plus_minus_recarga" role="minus">-</button>
                            </span>                            
                            <span class="input-group-addon bootstrap-touchspin-prefix input-group-text">$</span>
                                <input type="number" value="10" name="touchspin2"  id="id_value_recharge" class="form-control" style="display: block;">
                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                            <span class="input-group-btn">
                                <button class="btn btn-secondary bootstrap-touchspin-up" type="button" id="id_btn_plus_minus_recarga" role="plus">+</button>
                            </span>                            
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn-primary-grey" id="id_btn_modal_recarga" role="cancelar">Cancelar</button>
                <button type="button" class="btn-primary-pink" id="id_btn_modal_recarga" role="salvar">Salvar</button>                
            </div>
        </div>
    </div>
</div>
@stop