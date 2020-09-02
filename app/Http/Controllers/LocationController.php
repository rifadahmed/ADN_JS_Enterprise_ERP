<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        return view('locations.index');
    }
    public function create(){
        return view('locations.create');
    }
    public function edit($id)
    {
        return view('locations.edit');
    }
}
