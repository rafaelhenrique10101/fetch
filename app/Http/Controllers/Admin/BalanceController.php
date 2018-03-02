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
			'id'		=> $balance->id,
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
        if($balance->deposit($request->value)){
            return $balance->amount;
        }else{
            return 0;
        }
    }

}
