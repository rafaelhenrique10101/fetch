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
        $result = [			
			'amount' 	=> $amount
		];

        return view('admin.balance.index', compact('result'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function depositStore(Request $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        
        if($deposit = $balance->deposit($request->value)){
            return $deposit;
        }        
    }

    public function withdrawnStore(Request $request)
    {
        $balance = auth()->user()->balance()->firstOrCreate([]);
        
        if($result = $balance->withdrawn($request->value)){
            return $result;
        }        
    }

}
