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
    public function editBuyerType(){
        $data['title'] = "Edit Buyer Types";
        return view('buyers.buyers_type.editBuyerType', $data);
    }
    public function showBuyerType(){
        $data['title'] = "Edit Buyer Types";
        return view('buyers.buyers_type.showBuyerType', $data);
    }
    
    public function createBuyerType(){
        $data['title'] = "Create Buyer Types";
        return view('buyers.buyers_type.createBuyerType', $data);
    }
    
}
