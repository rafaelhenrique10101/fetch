<?php

// Redireciona para http://dev.fetch.hs/admin caso o usuário digite http://dev.fetch.hs/

$this->get('/', function(){
    return redirect('admin');
});

// As rotas abaixo só são acessíveis com o usuário autenticado

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');     
    $this->get('/', 'AdminController@index')->name('admin.home'); 
});


Auth::routes();
