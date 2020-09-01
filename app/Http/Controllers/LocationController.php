<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function create(){
        return view('locations.addLocation');
    }
}
