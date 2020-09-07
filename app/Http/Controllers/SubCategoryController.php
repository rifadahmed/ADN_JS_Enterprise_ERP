<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $data['title'] = "List Of SubCategories";
        return view('categories.subcategories.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit SubCategory";
        return view('categories.subcategories.edit', $data);
    }
    public function show(){
        $data['title'] = "SubCategory Details";
        return view('categories.subcategories.show', $data);
    }
    public function create(){
        $data['title'] = "Create SubCategory";
        return view('categories.subcategories.create', $data);
    }
}
