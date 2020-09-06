<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index(){
        $data['title'] = "List of Buyer";
        return view('buyers.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Buyer";
        return view('buyers.edit', $data);
    }
    public function show(){
        $data['title'] = "Buyer details";
        return view('buyers.show', $data);
    }
    
}
