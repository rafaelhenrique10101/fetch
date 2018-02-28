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
			<div class="col-lg-8">
                <div class="stats-2-block block d-flex">
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                    <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                    <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stats-3-block block d-flex">
                  <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                    </div>
                  </div>
                  <div class="stats-3 d-flex justify-content-between text-center">
                    <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                      <div class="line"></div><small>+246</small>
                    </div>
                    <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                      <div class="line"></div><small>+416</small>
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
            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Realizar recarga</strong></div>
                <div class="modal-body">
                    <p>Informe abaixo o valor de recarga considerando os valores de R$ 15,00, R$ 25,00, R$ 50,00 e R$ 100,00</p>
                    <div style="width: 100%;height: 50px;">
                        <div class="input-group bootstrap-touchspin input-number-aling-center">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary bootstrap-touchspin-down" type="button" id="id_btn_plus_minus_recarga" role="minus">-</button>
                            </span>
                            <span class="input-group-addon bootstrap-touchspin-prefix input-group-text">$</span>
                            <input type="text" value="10" name="touchspin2" id="id_value_recharge" class="form-control" style="display: block;">
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
</div>
@stop