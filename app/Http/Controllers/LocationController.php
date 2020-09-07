<?php

namespace App\Http\Controllers;
use App\LocationType;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $title = "List of Locations";
        $locations=Location::all();
        return view('locations.index', compact('title','locations'));
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
     {  $input=$request->all();
        $input['created_by']='916';
        $input['updated_by']='916';
        LocationType::create($input);
        return redirect('/location/types/list'); 
    
    }
    
    public function editTypesList($id)
    {
        $title = "Edit Location Type";
        $data=LocationType::findOrFail($id);
        return view('locations.locations_type.editTypesList', compact('title','data'));

    }
    public function showTypesList($id)
    {
        $title= "Location Type Details";
        $locationType=LocationType::findOrFail($id); 
        return view('locations.locations_type.showTypesList', compact('title','locationType'));
    }
    public function updateTypesList(Request $request,$id)
    { 
        $input=$request->all();
        $input['created_by']='16';
        $input['updated_by']='16';
        $locationType=LocationType::findOrFail($id);
        $locationType->update($input);
        return redirect('/location/types/list'); 
    }
    
    
}
