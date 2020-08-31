<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Warehouse extends Controller
{
    public function list(){
        return view('pages.warehouse.list');
    }

    public function addWarehouse(){
        return view('pages.warehouse.addWarehouse');
    }
}
