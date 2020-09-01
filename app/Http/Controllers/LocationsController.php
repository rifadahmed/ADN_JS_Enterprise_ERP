<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function create(){
        return view('locations.addLocation');
    }
}
