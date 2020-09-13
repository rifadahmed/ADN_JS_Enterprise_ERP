<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $data['title'] = "List Of Suppliers";
        $data['suppliers']=Supplier::all();
        return view('suppliers.index', $data);
    }
}
