@extends('adminlte::page')

@section('content')
<div class="page-header no-margin-bottom">
    <div class="container-fluid">
    <h2 class="h5 no-margin-bottom">Saldo de recarga</h2>
    </div>
</div>
<div class="container-fluid">
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Dahboard</a></li>
    <li class="breadcrumb-item active">Saldo de recarga</li>
    </ul>
</div>
<div class="box">
    <div class="box-header">
        <a href="{{route('balance.deposit')}}" class="btn btn-primary"><i class="ion ion-cash"></i>&nbsp;Recarregar</a>
        <a href="" class="btn btn-danger"><i class="fa fa-fw fa-credit-card-alt"></i>&nbsp;Sacar</a>
    </div>
    <div class="box-body">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><sup style="font-size: 20px">R$</sup>&nbsp;{{ number_format($amount, 2, ',', '') }}</h3>
                    <p>Saldo dispon&iacute;vel</p>
                </div>
                <a href="#" class="small-box-footer">Hist&oacute;rico <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@stop