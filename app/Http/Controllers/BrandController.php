<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $data['title'] = "List Of Brands";
        return view('brands.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Brand";
        return view('brands.edit', $data);
    }
    public function show(){
        $data['title'] = "Brand Details";
        return view('brands.show', $data);
    }
    public function create(){
        $data['title'] = "Create Brand";
        return view('brands.create', $data);
    }
}
