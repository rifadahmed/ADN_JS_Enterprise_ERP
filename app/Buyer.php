<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function division(){
        return $this->belongsTo('App\Location','buyer_division_id');
    }
    public function district(){
        return $this->belongsTo('App\Location','buyer_district_id');
    }
    public function area(){
        return $this->belongsTo('App\Location','buyer_area_id');
    }
}
