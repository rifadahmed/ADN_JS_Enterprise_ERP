<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class Buyer extends Model
{
    use SoftDeletes;

    /*** Created by and Updated by id insertion*/
    public static function boot(){
        parent::boot();
        static::creating(function($query){
            if(Auth::check()){
                $query->created_by = Auth::user()->id;
            }
        });
        static::updating(function($query){
            if(Auth::check()){
                $query->updated_by = Auth::user()->id;
            }
        });
    }
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
