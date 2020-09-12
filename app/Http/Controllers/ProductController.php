<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Products";
        
        return view('products.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Product";
        return view('products.edit', $data);
    }
    public function show(){
        $data['title'] = "Product Details";
        return view('products.show', $data);
    }
    public function create(){
        $data['title'] = "Create Product";
        return view('products.create', $data);
    }
}
