<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function division(){
        return $this->belongsTo('App\Division','buyer_division_id');
    }
    public function district(){
        return $this->belongsTo('App\District','buyer_district_id');
    }
    public function area(){
        return $this->belongsTo('App\Upazila','buyer_area_id');
    }
    public function buyer_type(){
        return $this->belongsTo('App\BuyerType','buyer_type_id');
    }
}
