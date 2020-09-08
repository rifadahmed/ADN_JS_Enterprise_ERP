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
    public function store(Request $request){
        $request->validate([
            'location_name' => 'required|unique:locations',
            'location_status' => 'required',
            'location_order' => 'nullable|integer',

        ]);
        $input=$request->all();
        $input['location_type_id']=1;
        
        Location::create($input);
        return redirect('/location/list');
    }

    public function show($id){
        $title= "Location Details";
        $location=Location::findOrFail($id);

        return view('locations.show', compact('title','location'));
    }
    public function edit($id)
    {
        $title = "Edit Location";
        $data=Location::findOrFail($id);
        return view('locations.edit', compact('title','data'));
    }
    public function update(Request $request,$id)
    { 
        $request->validate([
            'location_name' => 'unique:locations,location_name,'.$id ,
            'location_status' => 'required',
            'location_order' => 'nullable|integer',

        ]);
        $input=$request->all();
        $input['location_type_id']=1;
        

        $locationModel = location::find($id);
        $locationModel->location_name = $request->location_name;
        $locationModel->location_status = $request->location_status;
        if($request->location_order) {
            $locationModel->location_order = $request->location_order;
        }
        $locationModel->save();

        return redirect()->route('location.edit',$id)->with('success','Location has been Updated successfully!');

        $locationType=Location::findOrFail($id);
        $locationType->update($input);
        return redirect('/location/list'); 
    }





                 // Location Type
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
