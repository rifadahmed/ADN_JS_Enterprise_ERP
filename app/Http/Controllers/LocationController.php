<?php

namespace App\Http\Controllers;
use App\LocationType;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List of Locations";
        $data['location_types']=LocationType::all();

        
        $locations = New Location();

        /** Search with status */
        if ($request->status == 'Active') {
            $locations = $locations->where('location_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $locations = $locations->where('location_status', 'Inactive');
        }
        /** Search with type */
        foreach($data['location_types'] as $location_type)
        {
            if($request->type ==$location_type->location_type_name )
            $locations = $locations->where('location_type_id', $location_type->id);
        }


      

         /** Search with name */
         if (isset($request->search)) {
            $locations = $locations->where(function ($query) use ($request) {
                $query->where('location_name', 'like', '%' . $request->search . '%');
            });
        }

        $locations = $locations->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->type || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $render['type'] = $request->type;
            $locations       = $locations->appends($render);
        }
        $data['locations'] = $locations;
        $data['serial']     = managePagination($locations);
        return view('locations.index', $data);
    }
    public function create(){
        $data['title'] = "Create New Location";
        $data['location_types']=LocationType::all();

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
        return redirect()->route('location.create')->with('success','Location has been Added successfully!');
    }

    public function show($id){
        $title= "Location Details";
        $location=Location::findOrFail($id);

        return view('locations.show', compact('title','location'));
    }
    public function edit($id)
    {
        $data['title'] = "Edit Location";
        $data['data']=Location::findOrFail($id);
        $data['location_types']=LocationType::all();
        return view('locations.edit', $data);
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
        $locationModel->location_type_id=$request->location_type_id;
        if($request->location_order) {
            $locationModel->location_order = $request->location_order;
        }
        $locationModel->save();

        return redirect()->route('location.edit',$id)->with('success','Location has been Updated successfully!');

        // $locationType=Location::findOrFail($id);
        // $locationType->update($input);
        // return redirect('/location/list'); 
    }





    // ****************************************** Location Type ******************************************
    public function indexTypesList(Request $request)
    {
        $data['title'] = "List of Location Type";
        $locationTypes = New LocationType();

        /** Search with status */
        if ($request->status == 'Active') {
            $locationTypes = $locationTypes->where('location_type_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $locationTypes = $locationTypes->where('location_type_status', 'Inactive');
        }

         /** Search with name */
         if (isset($request->search)) {
            $locationTypes = $locationTypes->where(function ($query) use ($request) {
                $query->where('location_type_name', 'like', '%' . $request->search . '%');
            });
        }

        $locationTypes = $locationTypes->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $locationTypes       = $locationTypes->appends($render);
        }
        $data['locationTypes'] = $locationTypes;
        $data['serial']     = managePagination($locationTypes);

       // $data['locationTypes']=LocationType::all();
        return view('locations.locations_type.indexTypesList', $data);

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
