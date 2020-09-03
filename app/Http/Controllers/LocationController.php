<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $data['title'] = "List of Locations";
        return view('locations.index', $data);
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

    public function showTypesList()
    {
        $data['title'] = "List of Location Type";
        return view('locations.showTypesList', $data);
    }
    public function addTypesList()
    {
        $data['title'] = "Create New Location Type";
        return view('locations.addTypesList', $data);
    }
    public function editTypesList()
    {
        $data['title'] = "Edit Location Type";
        return view('locations.editTypesList', $data);
    }
    
    
}
