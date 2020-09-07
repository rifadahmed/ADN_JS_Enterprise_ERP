<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        //mass assignment
         'category_name', 'category_order','category_status','created_by','updated_by'
    ];
}
