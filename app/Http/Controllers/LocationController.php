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

    public function show(){
        $data['title'] = "Location Details";
        return view('locations.show', $data);
    }
    public function edit($id)
    {
        $data['title'] = "Edit Location";
        return view('locations.edit', $data);
    }

    public function indexTypesList()
    {
        $data['title'] = "List of Location Type";
        return view('locations.locations_type.indexTypesList', $data);
    }
    public function addTypesList()
    {
        $data['title'] = "Create New Location Type";
        return view('locations.locations_type.addTypesList', $data);
    }
    public function editTypesList()
    {
        $data['title'] = "Edit Location Type";
        return view('locations.locations_type.editTypesList', $data);
    }
    public function showTypesList()
    {
        $data['title'] = "Location Type Details";
        return view('locations.locations_type.showTypesList', $data);
    }
    
}
