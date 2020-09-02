<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        return view('locations.index');
    }
    public function create(){
        $data['title'] = "Create New Location";
        return view('locations.create', $data);
    }
    public function edit($id)
    {
        $data['title'] = "Edit Location";
        return view('locations.edit', $data);
    }
}
