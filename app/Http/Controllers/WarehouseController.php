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
        $data['title'] = "Edit Warehouse";
        return view('warehouses.edit', $data);
    }
    public function show(){
        $data['title'] = "Warehouse Details";
        return view('warehouses.show', $data);
    }
    public function create(){
        $data['title'] = "Create Warehouse";
        return view('warehouses.create', $data);
    }
}
