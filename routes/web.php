<?php

// Redireciona para http://dev.fetch.hs/admin caso o usuário digite http://dev.fetch.hs/

$this->get('/', function(){
    return redirect('admin');
});

// As rotas abaixo só são acessíveis com o usuário autenticado

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
    
    //Routes requested by AJAX

    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    
    
    
    //Modals routes

    $this->get('modal_recharge', 'BalanceController@modal_recharge')->name('balance.modal.recharge');
    $this->get('modal_withdraw', 'BalanceController@modal_withdraw')->name('balance.modal.withdraw');
    
    
    //Routes requested by URL

    $this->get('balance', 'BalanceController@index')->name('admin.balance');     
    //$this->get('histor', 'BalanceController@index')->name('admin.balance');  
    $this->get('/', 'AdminController@index')->name('admin.home'); 
});


Auth::routes();
