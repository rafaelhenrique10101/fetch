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
                'msg'       =>  'Recarga realizada com sucesso.',
                'amount'    =>  number_format($this->amount, 2, ',', '.')
            ];

        }else{

            DB::roolback();
            
            $result = [
                'cod'       =>  '0',
                'msg'       =>  'Erro ao realizar a recarga',
                'amount'    =>  number_format($this->amount, 2, ',', '.')
            ];

        }

        return $result;
    }

    public function withdrawn($value): Array
    {

    }
}
