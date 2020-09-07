<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        $title = "List Of Categories";
        $categories=Category::all();
        return view('categories.index',compact('title','categories'));
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
