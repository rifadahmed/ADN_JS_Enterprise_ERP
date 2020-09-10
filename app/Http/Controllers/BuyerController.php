<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Location;
use App\BuyerType;
use App\LocationType;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(){
        $data['title'] = "List Of Buyer";
        $data['buyers']=Buyer::all();
        $data['buyer_types']=BuyerType::all();
        return view('buyers.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Buyer";
        return view('buyers.edit', $data);
    }
    public function show($id){
        $data['title'] = "Buyer Details";
        $data['buyer']=Buyer::find($id);
        return view('buyers.show', $data);
    }
    public function create(){
        $data['title'] = "Create Buyer";

        //get location names for  division
        $data['locationTypeId']=LocationType::where('location_type_name', "Division")->first();
        $locId=$data['locationTypeId']->id;
        $data['division_locations']=Location::where('location_type_id',$locId )->get();

        //get location names for  district
        $data['locationTypeId']=LocationType::where('location_type_name', "District")->first();
        $locId=$data['locationTypeId']->id;
        $data['district_locations']=Location::where('location_type_id',$locId )->get();

        //get location names for  area
        $data['locationTypeId']=LocationType::where('location_type_name', "Area")->first();
        $locId=$data['locationTypeId']->id;
        $data['area_locations']=Location::where('location_type_id',$locId )->get();

        //get buyer type
        $data['buyer_types']=BuyerType::all();

        return view('buyers.create', $data);
    }
    
    public function store(Request $request){
        // $request->validate([
        //     'buyer_type_name' => 'required|unique:buyer_types',
        //     'buyer_type_status' => 'required',
        //     'buyer_type_order' => 'nullable|integer',

        // ]);
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

        return redirect()->route('buyer.create')->with('success','Buyer has been created successfully!');
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

        return view('buyers.buyers_type.indexBuyerType', $data);
    }
    public function editBuyerType($id){
        $data['title'] = "Edit Buyer Types";
        $data['data']=BuyerType::findOrFail($id);
        return view('buyers.buyers_type.editBuyerType', $data);
    }
    public function showBuyerType($id){
        $data['title'] = "Edit Buyer Types";
        $data['buyer_type']=BuyerType::findOrFail($id);
        return view('buyers.buyers_type.showBuyerType', $data);
    }
    
    public function createBuyerType(){
        $data['title'] = "Create Buyer Types";
        
        return view('buyers.buyers_type.createBuyerType', $data);
    }
    public function storeBuyerType(Request $request){
        $request->validate([
            'buyer_type_name' => 'required|unique:buyer_types',
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
            'buyer_type_name' => 'unique:buyer_types,buyer_type_name,'.$id ,

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
    
    
    
}
