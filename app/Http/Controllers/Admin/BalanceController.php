<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function index()
    {
        $balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;
        $historics = auth()->user()->historics()->get();         

        $balance = [			
			'amount' 	=> $amount
		];

        return view('admin.balance.index', compact('balance', 'historics'));
    }

    public function modal_recharge()
    {
        return view('admin.modal.recharge');
    }

    public function modal_withdraw()
    {
        return view('admin.modal.withdraw');
    }
    

    public function depositStore(Request $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        
        if($deposit = $balance->deposit($request->value))
        {
            return $deposit;
        }        
    }


    public function withdrawStore(Request $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        
        if($withdraw = $balance->withdraw($request->value))
        {
            return $withdraw;
        }        
    }

    public function historic(): Array
    {
        if($historics = auth()->user()->historics()->get())
        {
            return $historics;
        }
    }

}
