<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function division(){
        return $this->belongsTo('App\Location','supplier_division_id');
    }
    public function district(){
        return $this->belongsTo('App\Location','supplier_district_id');
    }
    public function area(){
        return $this->belongsTo('App\Location','supplier_area_id');
    }

}
