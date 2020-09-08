<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
class SubCategoryController extends Controller
{
    public function index(){
        $data['title'] = "List Of SubCategories";
        $data['sub_categories']=SubCategory::orderBy('sub_category_name')->paginate(2);
        return view('categories.subcategories.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit SubCategory";
        return view('categories.subcategories.edit', $data);
    }
    public function show($id){
        $data['title'] = "SubCategory Details";
        $data['sub_category']=SubCategory::findOrFail($id);
        return view('categories.subcategories.show', $data);
    }
    public function create(){
        $data['title'] = "Create SubCategory";
        return view('categories.subcategories.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories',
            'sub_category_status' => 'required',
            'sub_category_order' => 'integer',
        ]);
        //dd($request->all());

        $sub_categoryModel = new SubCategory();
        $sub_categoryModel->sub_category_name = $request->sub_category_name;
        $sub_categoryModel->sub_category_status = $request->sub_category_status;
        $sub_categoryModel->category_id = 1;
        if($request->sub_category_order) {
            $sub_categoryModel->sub_category_order = $request->sub_category_order;
        }
        
        $sub_categoryModel->save();

        return redirect()->route('subcategory.create')->with('success','Sub Category has been created successfully!');
        //return $request->all();
    }
}
