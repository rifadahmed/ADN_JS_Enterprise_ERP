<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Upazila;
use App\District;
use App\Division;
use App\Location;
use App\BuyerType;
use App\LocationType;
use App\ThemeSetting;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Buyers";
        // $data['buyers']=Buyer::all();
        $data['buyer_types']=BuyerType::all();
        $buyers = New Buyer();

        /** Search with status */
        if ($request->status == 'Active') {
            $buyers = $buyers->where('buyer_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $buyers = $buyers->where('buyer_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $buyers = $buyers->where(function ($query) use ($request) {
                $query->where('buyer_name', 'like', '%' . $request->search . '%');
            });
        }

        /** Search with Type */
        if (isset($request->type)) {
            
                $buyers = $buyers->where('buyer_type_id', $request->type);
            
        }
        $buyers = $buyers->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $buyers       = $buyers->appends($render);
        }


        $data['buyers'] = $buyers;
        $data['serial']     = managePagination($buyers);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Buyer";
        $data['buyer_types']=BuyerType::all();
        $data['data']=Buyer::find($id);
        //$data['locations'] = Location::where('location_status','Active')->get();
        $data['divisions'] = Division::all();
        $data['districts'] = District::all();
        $data['areas'] = Upazila::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

         return view('buyers.edit', $data);
        
    }
    public function show($id){
        $data['title'] = "Buyer Details";
        $data['buyer']=Buyer::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.show', $data);
    }
    public function create(){
        $data['title'] = "Create Buyer";
        //get buyer type
        $data['buyer_types']=BuyerType::all();

        $data['locations'] = Location::where('location_status','Active')->get();

        $data['divisions'] = Division::all();
        $data['districts'] = District::all();
        $data['areas'] = Upazila::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.create', $data);
    }
    
    public function store(Request $request){
       // return $request->all();
        $request->validate([
            'buyer_name' => 'required|unique:buyers|regex:/^[\pL\s\.]+$/u',
            'buyer_phone' => 'required|max:13',
            'buyer_email' => 'required|email',
            'buyer_status' => 'required',
            'buyer_company' => 'required',
            'buyer_address' => 'required',
            'buyer_type_id' => 'required',
            'buyer_division_id' => 'required',
            'buyer_district_id' => 'required',
            'buyer_area_id' => 'required',
            


        ]);
        $buyerModel = new Buyer();
        $buyerModel->buyer_name = $request->buyer_name;
        $buyerModel->buyer_company = $request->buyer_company;
        $buyerModel->buyer_address = $request->buyer_address;
        $buyerModel->buyer_type_id =  $request->buyer_type_id;
        $buyerModel->buyer_kam_id = 1;//this  field will be dynamic
        $buyerModel->buyer_division_id = $request->buyer_division_id;
        $buyerModel->buyer_district_id = $request->buyer_district_id;
        $buyerModel->buyer_area_id = $request->buyer_area_id;
        $buyerModel->buyer_phone = $request->buyer_phone;
        $buyerModel->buyer_email = $request->buyer_email;
        $buyerModel->buyer_status = $request->buyer_status;

        $buyerModel->save();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return redirect()->route('buyer.create')->with('success','Buyer has been created successfully!');
    }
    public function update(Request $request,$id){
        $request->validate([
            'buyer_name' => 'regex:/^[\pL\s\.]+$/u|unique:buyers,buyer_name,'.$id,
            'buyer_phone' => 'required|max:13',
            'buyer_email' => 'required|email',
            'buyer_company' => 'required',
            'buyer_address' => 'required',
            'buyer_type_id' => 'required',
            'buyer_division_id' => 'required',
            'buyer_district_id' => 'required',
            'buyer_area_id' => 'required',
            
            //'buyer_status' => 'required',


        ]);
        $buyerModel = Buyer::find($id);
        $buyerModel->buyer_name = $request->buyer_name;
        $buyerModel->buyer_company = $request->buyer_company;
        $buyerModel->buyer_address = $request->buyer_address;
        $buyerModel->buyer_type_id =  $request->buyer_type_id;
        $buyerModel->buyer_kam_id = 1;//this  field will be dynamic
        $buyerModel->buyer_division_id = $request->buyer_division_id;
        $buyerModel->buyer_district_id = $request->buyer_district_id;
        $buyerModel->buyer_area_id = $request->buyer_area_id;
        $buyerModel->buyer_phone = $request->buyer_phone;
        $buyerModel->buyer_email = $request->buyer_email;
        $buyerModel->buyer_status = $request->buyer_status;

        $buyerModel->save();

        return redirect()->route('buyer.edit',$id)->with('success','Buyer has been Updated successfully!');
    }

    // *****************************BUYER TYPE *****************************
    public function indexBuyerType(Request $request){
        $data['title'] = "List Of Buyer Types";
        //  $data['buyer_types']=BuyerType::all();
        $buyer_types = New BuyerType();

        /** Search with status */
        if ($request->status == 'Active') {
            $buyer_types = $buyer_types->where('buyer_type_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $buyer_types = $buyer_types->where('buyer_type_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $buyer_types = $buyer_types->where(function ($query) use ($request) {
                $query->where('buyer_type_name', 'like', '%' . $request->search . '%');
            });
        }

        $buyer_types = $buyer_types->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $buyer_types       = $buyer_types->appends($render);
        }


        $data['buyer_types'] = $buyer_types;
        $data['serial']     = managePagination($buyer_types);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.buyers_type.indexBuyerType', $data);
    }
    public function editBuyerType($id){
        $data['title'] = "Edit Buyer Types";
        $data['data']=BuyerType::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.buyers_type.editBuyerType', $data);
    }
    public function showBuyerType($id){
        $data['title'] = "Edit Buyer Types";
        $data['buyer_type']=BuyerType::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.buyers_type.showBuyerType', $data);
    }
    
    public function createBuyerType(){
        $data['title'] = "Create Buyer Types";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('buyers.buyers_type.createBuyerType', $data);
    }
    public function storeBuyerType(Request $request){
        $request->validate([
            'buyer_type_name' => 'required|unique:buyer_types|regex:/^[\pL\s\-]+$/u',
            'buyer_type_status' => 'required',
            'buyer_type_order' => 'nullable|integer',

        ]);
        $buyerTypeModel = new BuyerType();
        $buyerTypeModel->buyer_type_name = $request->buyer_type_name;
        $buyerTypeModel->buyer_type_status = $request->buyer_type_status;
        if($request->buyer_type_order) {
            $buyerTypeModel->buyer_type_order = $request->buyer_type_order;
        }
        $buyerTypeModel->save();

        return redirect()->route('buyer.type.create')->with('success','Buyer Type has been created successfully!');
    }
    public function updateBuyerType(Request $request,$id){
        $request->validate([
            'buyer_type_name' => 'regex:/^[\pL\s\-]+$/u|unique:buyer_types,buyer_type_name,'.$id ,

            'buyer_type_status' => 'required',
            'buyer_type_order' => 'nullable|integer',

        ]);
        $buyerTypeModel = BuyerType::findOrFail($id);;
        $buyerTypeModel->buyer_type_name = $request->buyer_type_name;
        $buyerTypeModel->buyer_type_status = $request->buyer_type_status;
        if($request->buyer_type_order) {
            $buyerTypeModel->buyer_type_order = $request->buyer_type_order;
        }
        $buyerTypeModel->save();

        return redirect()->route('buyer.type.edit',$id)->with('success','Buyer Type has been created successfully!');
    }

    // *****************************Location AJAX Call *****************************
    public function districtAjaxcall(Request $request){
            $div_id = $request->div_id;
            $districts = District::where('division_id',$div_id)->get();
                            
            return view('buyers._ajax_districtform',compact('districts'));

    }

    public function upazilaAjaxcall(Request $request){
        $dis_id = $request->dis_id;
        $upazilas = Upazila::where('district_id',$dis_id)->get();
                        
        return view('buyers._ajax_upazilaform',compact('upazilas'));

    }
   

     /***
     * Trash Buyer
     */
    public function trash($id)
    {
        Buyer::findOrFail($id)->delete();
        return redirect()->route('buyer.index')->with('success','Buyer trashed successfully');
    }

    /***
     * Restore Buyer
     */
    public function restore($id)
    {
        Buyer::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Buyer has been restored successfully');
    }

    /***
     * Delete Buyer Permanently
     */
    public function destroy($id)
    {
        try {
            Buyer::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Buyer has been deleted successfully');
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
