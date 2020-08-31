<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Location extends Controller
{
    public function lists(){
        return view('pages.manage_location.lists');
    }
    public function add_list(){
        return view('pages.manage_location.add_list');
    }
    public function type_lists(){
        return view('pages.manage_location.type_lists');
    }
    public function add_type_list(){
        return view('pages.manage_location.add_type_list');
    }
    

}
