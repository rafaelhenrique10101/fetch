<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;

class AdminController extends Controller
{
    public function index()
    {
		$balance = auth()->user()->balance;
        $amount = $balance ? $balance->amount : 0;
		$result = [
			'id'		=> $balance->id,
			'amount' 	=> $amount
		];
		
        //return view('admin.home.index')->with('result',$result);
		return view('admin.home.index', compact('result'));
    }
}
