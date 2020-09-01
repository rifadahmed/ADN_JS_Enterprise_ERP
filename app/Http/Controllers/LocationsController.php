<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function addLocation(){
        return view('locations.addLocation');
    }
}
