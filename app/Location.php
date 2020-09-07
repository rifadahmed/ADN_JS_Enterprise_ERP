<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        //mass assignment
        'location_type_id', 'location_name', 'location_order','location_status','created_by','updated_by'
    ];
    public function type(){
        return $this->belongsTo('App\LocationType','location_type_id');
    }
}
