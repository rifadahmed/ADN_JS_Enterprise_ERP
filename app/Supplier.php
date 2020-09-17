<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class Supplier extends Model
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
        return $this->belongsTo('App\Division','supplier_division_id');
    }
    public function district(){
        return $this->belongsTo('App\District','supplier_district_id');
    }
    public function area(){
        return $this->belongsTo('App\Upazila','supplier_area_id');
    }

}
