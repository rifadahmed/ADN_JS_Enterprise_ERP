<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationType extends Model
{
    protected $fillable = [
        //mass assignment
        'location_type_name', 'location_type_order', 'location_type_status','created_by','updated_by'
    ];
  
}
