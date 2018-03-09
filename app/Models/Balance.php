<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Balance extends Model
{
    public $timestamps = false;

    public function deposit($value): Array
    {
        DB::beginTransaction();

        $result = [];

        $total_before = $this->amount ? $this->amount : 0;
        $this->amount += $value ? $value : 0;
        $deposit = $this->save();
        
        $historic = auth()->user()->historics()->create([
            'type'          =>  'I',
            'amount'        =>  $value,
            'total_before'  =>  $total_before,
            'total_after'   =>  $this->amount,       
            'date'          =>  date('Ymd')
        ]);
        

        if($deposit && $historic){
            
            DB::commit();

            $result = [
                'cod'       =>  '1',
                'msg'       =>  'Recarga realizada com sucesso, seu saldo atual é R$ ' . number_format($this->amount, 2, ',', '.')
            ];

        }else{

            DB::roolback();
            
            $result = [
                'cod'       =>  '0',
                'msg'       =>  'Erro ao realizar a recarga, seu saldo atual é R$ ' . number_format($this->amount, 2, ',', '.')                
            ];

        }

        return $result;
    }

    public function withdraw($value): Array
    {
        $result = [];

        if($this->amount < $value)
        {
            $result = [
                'cod'       =>  '2',
                'msg'       =>  'Você não possui saldo suficiênte, saldo atual R$ '. number_format($this->amount, 2, ',', '.') . ', valor solicitado R$ ' . number_format($value, 2, ',', '.')
            ];

        }else{
        
            DB::beginTransaction();        

            $total_before = $this->amount ? $this->amount : 0;
            $this->amount -= $value ? $value : 0;
            $withdraw = $this->save();
            
            $historic = auth()->user()->historics()->create([
                'type'          =>  'O',
                'amount'        =>  $value,
                'total_before'  =>  $total_before,
                'total_after'   =>  $this->amount,       
                'date'          =>  date('Ymd')
            ]);
            

            if($withdraw && $historic){
                
                DB::commit();

                $result = [
                    'cod'       =>  '1',
                    'msg'       =>  'Saque realizado com sucesso. seu saldo atual é R$ '. number_format($this->amount, 2, ',', '.')                
                ];

            }else{

                DB::roolback();
                
                $result = [
                    'cod'       =>  '0',
                    'msg'       =>  'Erro ao realizar o saque. seu saldo atual é R$ '. number_format($this->amount, 2, ',', '.')                
                ];

            }        
        
        }     
        
        return $result;
    }
}
