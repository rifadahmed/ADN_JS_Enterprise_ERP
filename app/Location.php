<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class Location extends Model
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
    protected $fillable = [
        //mass assignment
        'location_type_id', 'location_name', 'location_order','location_status','created_by','updated_by'
    ];
    public function locationType(){
        return $this->belongsTo('App\LocationType','location_type_id');
    }
    public function subcategories(){

        return $this->hasMany('App\Location', 'parent_id');

    }
}
