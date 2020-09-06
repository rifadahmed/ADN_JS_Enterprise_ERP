<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(){
        $data['title'] = "List Of Warehouse";
        return view('warehouses.index', $data);
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
}
