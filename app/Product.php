<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
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

    public function category(){
        return $this->belongsTo('App\Category','product_category_id');
    }
    
    public function subcategory(){
        return $this->belongsTo('App\SubCategory','product_sub_category_id');
    }
    public function brand(){
        return $this->belongsTo('App\Brand','product_brand_id');
    }
}
