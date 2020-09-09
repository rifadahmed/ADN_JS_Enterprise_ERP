<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\BuyerType;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(){
        $data['title'] = "List Of Buyer";
        return view('buyers.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Buyer";
        return view('buyers.edit', $data);
    }
    public function show(){
        $data['title'] = "Buyer Details";
        return view('buyers.show', $data);
    }
    public function create(){
        $data['title'] = "Create Buyer";
        return view('buyers.create', $data);
    }

    // *****************************BUYER TYPE *****************************
    public function indexBuyerType(){
        $data['title'] = "List Of Buyer Types";
         $data['buyer_types']=BuyerType::all();
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
