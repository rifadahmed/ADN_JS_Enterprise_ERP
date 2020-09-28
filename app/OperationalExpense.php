<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperationalExpense extends Model
{
    public function type(){
        return $this->belongsTo('App\OperationalExpenseType','operational_expense_type_id');
    }
}
