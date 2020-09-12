<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(){
        $data['title'] = "List Of Purchases";
        return view('purchases.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Purchase";
        return view('purchases.edit', $data);
    }
    public function show(){
        $data['title'] = "Purchase Details";
        return view('purchases.show', $data);
    }
    public function create(){
        $data['title'] = "Create Purchase";
        return view('purchases.create', $data);
    }
}
