<?php

namespace App\Http\Controllers;
use App\Upazila;
use App\District;
use App\Division;
use App\Location;
use App\LocationType;
use App\ThemeSetting;
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
            'location_name' => 'required|unique:locations|regex:/^[\pL\s\-]+$/u',
            'location_status' => 'required',
            'location_type_id' => 'required',
            'location_order' => 'nullable|integer',

        ]);

        

        $locationModel = new location ;
        $locationModel->location_name = $request->location_name;
        $locationModel->location_status = $request->location_status;
        $locationModel->location_type_id=$request->location_type_id;
        if($request->location_order) {
            $locationModel->location_order = $request->location_order;
        }
        $locationModel->save();

        return redirect()->route('location.create')->with('success','Location has been Updated successfully!');
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
            'location_name' => 'regex:/^[\pL\s\-]+$/u|unique:locations,location_name,'.$id ,
            'location_status' => 'required',
            'location_order' => 'nullable|integer',

        ]);
        
        

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
        $data['title'] = "List of Location Types";
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
     {  
       
        $request->validate([
            'location_type_name' => 'required|unique:location_types|regex:/^[\pL\s\-]+$/u',
            'location_type_status' => 'required',
            'location_type_order' => 'nullable|integer',

        ]);

        

        $locationTypeModel = new LocationType ;
        $locationTypeModel->location_type_name = $request->location_type_name;
        $locationTypeModel->location_type_status = $request->location_type_status;
        if($request->location_type_order) {
            $locationTypeModel->location_type_order = $request->location_type_order;
        }
        $locationTypeModel->save();
        return redirect()->route('location.types.create')->with('success','Location Type has been Added successfully!');

    
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
        $request->validate([
            'location_type_name' => 'regex:/^[\pL\s\-]+$/u|unique:location_types,location_type_name,'.$id,
            'location_type_status' => 'required',
            'location_type_order' => 'nullable|integer',

        ]);

        

        $locationTypeModel = LocationType::find($id) ;
        $locationTypeModel->location_type_name = $request->location_type_name;
        $locationTypeModel->location_type_status = $request->location_type_status;
        if($request->location_type_order) {
            $locationTypeModel->location_type_order = $request->location_type_order;
        }
        $locationTypeModel->save();
        return redirect()->route('location.types.edit',$id)->with('success','Location Type has been Updated successfully!');
    }
    
    /////////////////////// For Division,District,Upazila ///////////////////////
    // Division
    public function index_division(Request $request)
    {
        $data['title'] = "List of Divisions";
        $divisions = New Division();

        /** Search with status */
        if ($request->status == 'Active') {
            $divisions = $divisions->where('status', 'Active');
        } else if ($request->status == 'Inactive') {
            $divisions = $divisions->where('status', 'Inactive');
        }

         /** Search with name */
         if (isset($request->search)) {
            $divisions = $divisions->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        }

        $divisions = $divisions->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $divisions       = $divisions->appends($render);
        }
        $data['divisions'] = $divisions;
        $data['serial']     = managePagination($divisions);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.division.index', $data);

    }
    public function create_division(){
        $data['title'] = "Create New Division";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.division.create', $data);
    }
    public function show_division($id){
        $data['title']="Division Details";
        $data['division']=Division::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;   
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;    
        return view('locations.division.show', $data);

    }
    public function store_division(Request $request){
        
        $request->validate([
            'name' => 'required|unique:divisions|regex:/^[\pL\s\-]+$/u',
            'status' => 'required',
            'bn_name' => 'required',

        ]);

        $divisionTypeModel = new division ;
        $divisionTypeModel->name = $request->name;
        $divisionTypeModel->bn_name = $request->bn_name;
        $divisionTypeModel->code = 00;
        $divisionTypeModel->status = $request->status;
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $divisionTypeModel->save();
        return redirect()->route('location.division.create')->with('success','Division has been Added successfully!');

    }

    public function edit_division($id){
        $data['title']="Edit Division";
        $data['data']=Division::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.division.edit',$data);
    }
    public function update_division(Request $request,$id)
    {
        $request->validate([
            'name'=>'regex:/^[\pL\s\-]+$/u|unique:divisions,name,'.$id,
            'status'=>'required',
            'bn_name'=>'required'

        ]);
        $divisionTypeModel =Division::find($id) ;
        $divisionTypeModel->name = $request->name;
        $divisionTypeModel->bn_name = $request->bn_name;
        $divisionTypeModel->code = 00;
        $divisionTypeModel->status = $request->status;
        $divisionTypeModel->save();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return redirect()->route('location.division.edit',$id)->with('success','Division has been Updated successfully!');

    }

    // District
    public function index_district(Request $request){
        $data['title'] = "List of Districts";
        $districts = New District();

        /** Search with status */
        if ($request->status == 'Active') {
            $districts = $districts->where('status', 'Active');
        } else if ($request->status == 'Inactive') {
            $districts = $districts->where('status', 'Inactive');
        }

         /** Search with name */
         if (isset($request->search)) {
            $districts = $districts->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        }

        $districts = $districts->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $districts       = $districts->appends($render);
        }
        $data['districts'] = $districts;
        $data['serial']     = managePagination($districts);

        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value; 
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;    
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
   
        return view('locations.district.index', $data);
    }
    public function show_district($id){
        $data['title']="District Details";
        $data['district']=District::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.district.show', $data);

    }
    public function create_district(){
        $data['title'] = "Create New District";
        $data['divisions']=Division::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.district.create', $data);
    }
    public function store_district(Request $request){
        
        $request->validate([
            'name' => 'required|unique:districts|regex:/^[\pL\s\-]+$/u',
            'division_id' => 'required',
            'bn_name' => 'required',
            'status' => 'required',

        ]);

        $districtTypeModel = new District ;
        $districtTypeModel->division_id = $request->division_id;
        $districtTypeModel->name = $request->name;
        $districtTypeModel->bn_name = $request->bn_name;
        $districtTypeModel->code = 00;
       
        $districtTypeModel->status = $request->status;

        $districtTypeModel->save();

        return redirect()->route('location.district.create')->with('success','District has been Added successfully!');

    }

    public function edit_district($id){
        $data['title']="Edit District";
        $data['data']=District::find($id);
        $data['divisions']=Division::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.district.edit',$data);
    }
    public function update_district(Request $request,$id)
    {
        $request->validate([
            'name'=>'regex:/^[\pL\s\-]+$/u|unique:districts,name,'.$id,
            'status'=>'required',
            'division_id'=>'required',
            'bn_name'=>'required'

        ]);
        $districtTypeModel =District::find($id) ;
        $districtTypeModel->name = $request->name;
        $districtTypeModel->bn_name = $request->bn_name;
        $districtTypeModel->division_id = $request->division_id;
        $districtTypeModel->code = 00;
        $districtTypeModel->status = $request->status;
        $districtTypeModel->save();
        return redirect()->route('location.district.edit',$id)->with('success','District has been Updated successfully!');

    }

    //Upazila
    public function index_upazila(Request $request){
        $data['title'] = "List of Upazilas";
        $upazilas = New Upazila();

        /** Search with status */
        if ($request->status == 'Active') {
            $upazilas = $upazilas->where('status', 'Active');
        } else if ($request->status == 'Inactive') {
            $upazilas = $upazilas->where('status', 'Inactive');
        }

         /** Search with name */
         if (isset($request->search)) {
            $upazilas = $upazilas->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        }

        $upazilas = $upazilas->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $upazilas       = $upazilas->appends($render);
        }
        $data['upazilas'] = $upazilas;
        $data['serial']     = managePagination($upazilas);

        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;    
        return view('locations.upazila.index', $data);
    }
    public function show_upazila($id){
        $data['title']="Upazila Details";
        $data['upazila']=Upazila::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value; 
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.upazila.show', $data);

    }
    public function edit_upazila($id){
        $data['title']="Edit Upazila";
        $data['data']=Upazila::find($id);
        $data['districts']=District::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.upazila.edit',$data);
    }
    public function update_upazila(Request $request,$id)
    {
        $request->validate([
            'name'=>'regex:/^[\pL\s\-]+$/u|unique:upazilas,name,'.$id,
            'status'=>'required',
            'district_id'=>'required',
            'bn_name'=>'required'

        ]);
        $upazilaTypeModel =Upazila::find($id) ;
        $upazilaTypeModel->name = $request->name;
        $upazilaTypeModel->bn_name = $request->bn_name;
        $upazilaTypeModel->district_id = $request->district_id;
        $upazilaTypeModel->code = 00;
        $upazilaTypeModel->status = $request->status;
        $upazilaTypeModel->save();
        return redirect()->route('location.upazila.edit',$id)->with('success','Upazila has been Updated successfully!');

    }
    public function create_upazila(){
        $data['title'] = "Create New Upazila";
        $data['districts']=District::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('locations.upazila.create', $data);
    }
    public function store_upazila(Request $request){
        
        $request->validate([
            'name' => 'required|unique:upazilas|regex:/^[\pL\s\-]+$/u',
            'district_id' => 'required',
            'bn_name' => 'required',
            'status' => 'required',

        ]);

        $districtTypeModel = new Upazila ;
        $districtTypeModel->district_id = $request->district_id;
        $districtTypeModel->name = $request->name;
        $districtTypeModel->bn_name = $request->bn_name;
        $districtTypeModel->code = 00;
        $districtTypeModel->status = $request->status;

        $districtTypeModel->save();
        return redirect()->route('location.upazila.create')->with('success','Upazila has been Added successfully!');

    }

















     /***
     * Trash Location
     */
    public function trash($id)
    {
        Location::findOrFail($id)->delete();
        return redirect()->route('location.index')->with('success','Location trashed successfully');
    }

    /***
     * Restore Location
     */
    public function restore($id)
    {
        Location::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Location has been restored successfully');
    }

    /***
     * Delete Location Permanently
     */
    public function destroy($id)
    {
        try {
            Location::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Location has been deleted successfully');
        } catch (\Exception $exception) {
            if ($exception->getCode() == 23000) {
                $status = 'warning';
                $alert = 'You can\'t delete this item because lot\'s of dependency exist on system';
            } else {
                $status = 'danger';
                $alert = $exception->getMessage();
            }
            return redirect()->back()->with($status,$alert);
        }
    }
}
