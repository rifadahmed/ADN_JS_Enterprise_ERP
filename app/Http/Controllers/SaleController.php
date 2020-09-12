<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        $data['title'] = "List Of Sales";
        return view('sales.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Sale";
        return view('sales.edit', $data);
    }
    public function show(){
        $data['title'] = "Sale Details";
        return view('sales.show', $data);
    }
    public function create(){
        $data['title'] = "Create Sale";
        return view('sales.create', $data);
    }
}
