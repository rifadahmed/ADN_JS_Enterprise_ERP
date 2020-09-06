<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['title'] = "List Of Categories";
        return view('categories.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Category";
        return view('categories.edit', $data);
    }
    public function show(){
        $data['title'] = "Category Details";
        return view('categories.show', $data);
    }
    public function create(){
        $data['title'] = "Create Category";
        return view('categories.create', $data);
    }
}
