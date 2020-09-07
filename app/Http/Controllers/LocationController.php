<?php

namespace App\Http\Controllers;
use App\LocationType;
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
        $title = "List of Location Type";
        $locationTypes=LocationType::all();
        return view('locations.locations_type.indexTypesList', compact('title','locationTypes'));

    }
    public function addTypesList()
    {
        $data['title'] = "Create New Location Type";
        return view('locations.locations_type.addTypesList', $data);
    }
    public function storeTypesList(Request $request)
    { $input=$request->all();
        $input['created_by']='916';
        $input['deleted_by']='916';
        LocationType::create($input);
        return redirect('/location/types/list'); 
        // return $input;
    }
    
    public function editTypesList()
    {
        $data['title'] = "Edit Location Type";
        return view('locations.locations_type.editTypesList', $data);
    }
    public function showTypesList($id)
    {
        $title= "Location Type Details";
        $locationType=LocationType::findOrFail($id); 
        return view('locations.locations_type.showTypesList', compact('title','locationType'));
    }
    
}
