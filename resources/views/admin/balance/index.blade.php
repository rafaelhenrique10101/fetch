@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
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