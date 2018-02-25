@extends('adminlte::page')

@section('content')
<div class="page-header">
	<div class="container-fluid">
	<h2 class="h5 no-margin-bottom" id="id_title_view">Dashboard</h2>
	</div>
</div>
<section class="no-padding-top no-padding-bottom">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-6">
		<div class="statistic-block block">
			<div class="progress-details d-flex align-items-end justify-content-between">
			<div class="title">
				<div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
			</div>
			<div class="number dashtext-1">27</div>
			</div>
			<div class="progress progress-template">
			<div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
			</div>
		</div>
		</div>
		<div class="col-md-3 col-sm-6">
		<div class="statistic-block block">
			<div class="progress-details d-flex align-items-end justify-content-between">
			<div class="title">
				<div class="icon"><i class="icon-contract"></i></div><strong>New Projects</strong>
			</div>
			<div class="number dashtext-2">375</div>
			</div>
			<div class="progress progress-template">
			<div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
			</div>
		</div>
		</div>
		<div class="col-md-3 col-sm-6">
		<div class="statistic-block block">
			<div class="progress-details d-flex align-items-end justify-content-between">
			<div class="title">
				<div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
			</div>
			<div class="number dashtext-3">140</div>
			</div>
			<div class="progress progress-template">
			<div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
			</div>
		</div>
		</div>
		<div class="col-md-3 col-sm-6">
		<div class="statistic-block block">
			<div class="progress-details d-flex align-items-end justify-content-between">
			<div class="title">
				<div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
			</div>
			<div class="number dashtext-4">41</div>
			</div>
			<div class="progress progress-template">
			<div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>

<section class="no-padding-bottom">
	<div class="container-fluid">
	<div class="row">		
		<div class="col-lg-12">
			<div class="drills-chart block"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
				<canvas id="lineChart1" width="723" height="361" class="chartjs-render-monitor" style="display: block; width: 723px; height: 361px;"></canvas>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="no-padding-bottom">
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
		<div class="user-block block text-center">
			<div class="avatar"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-1.jpg" alt="..." class="img-fluid">
			<div class="order dashbg-2">1st</div>
			</div><a href="#" class="user-title">
			<h3 class="h5">Richard Nevoreski</h3><span>@richardnevo</span></a>
			<div class="contributions">950 Contributions</div>
			<div class="details d-flex">
			<div class="item"><i class="icon-info"></i><strong>150</strong></div>
			<div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
			<div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
			</div>
		</div>
		</div>
		<div class="col-lg-4">
		<div class="user-block block text-center">
			<div class="avatar"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-4.jpg" alt="..." class="img-fluid">
			<div class="order dashbg-1">2nd</div>
			</div><a href="#" class="user-title">
			<h3 class="h5">Samuel Watson</h3><span>@samwatson</span></a>
			<div class="contributions">772 Contributions</div>
			<div class="details d-flex">
			<div class="item"><i class="icon-info"></i><strong>80</strong></div>
			<div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
			<div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
			</div>
		</div>
		</div>
		<div class="col-lg-4">
		<div class="user-block block text-center">
			<div class="avatar"><img src="https://d19m59y37dris4.cloudfront.net/dark-admin-premium/1-3-2/img/avatar-6.jpg" alt="..." class="img-fluid">
			<div class="order dashbg-4">3rd</div>
			</div><a href="#" class="user-title">
			<h3 class="h5">Sebastian Wood</h3><span>@sebastian</span></a>
			<div class="contributions">620 Contributions</div>
			<div class="details d-flex">
			<div class="item"><i class="icon-info"></i><strong>150</strong></div>
			<div class="item"><i class="fa fa-gg"></i><strong>280</strong></div>
			<div class="item"><i class="icon-flow-branch"></i><strong>190</strong></div>
			</div>
		</div>
		</div>
	</div>
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
</section>
@stop