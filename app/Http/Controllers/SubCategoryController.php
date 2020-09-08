<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\Category;
class SubCategoryController extends Controller
{
    public function index(){
        $data['title'] = "List Of SubCategories";
        $data['sub_categories']=SubCategory::orderBy('sub_category_name')->paginate(2);
        return view('categories.subcategories.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit SubCategory";
        $data['data'] = SubCategory::findOrFail($id);
        $data['categories'] = Category::all();
        return view('categories.subcategories.edit', $data);
    }
    public function show($id){
        $data['title'] = "SubCategory Details";
        $data['sub_category']=SubCategory::findOrFail($id);
        return view('categories.subcategories.show', $data);
    }
    public function create(){
        $data['title'] = "Create SubCategory";
        $data['categories'] = Category::all();
        return view('categories.subcategories.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'sub_category_name' => 'unique:sub_categories,sub_category_name,' ,
            'sub_category_status' => 'required',
            'sub_category_order' => 'nullable|integer',
        ]);
        //dd($request->all());

        $sub_categoryModel = new SubCategory();
        $sub_categoryModel->sub_category_name = $request->sub_category_name;
        $sub_categoryModel->sub_category_status = $request->sub_category_status;
        $sub_categoryModel->category_id = $request->category_id;
        if($request->sub_category_order) {
            $sub_categoryModel->sub_category_order = $request->sub_category_order;
        }
        
        $sub_categoryModel->save();

        return redirect()->route('subcategory.list')->with('success','Sub Category has been created successfully!');
        //return $request->all();
    }

    public function update(Request $request,$id){

        $request->validate([
            'sub_category_name' => 'required',
            'sub_category_status' => 'required',
            'sub_category_order' => 'nullable|integer',
        ]);

        $sub_categoryModel = SubCategory::find($id);
        $sub_categoryModel->sub_category_name = $request->sub_category_name;
        $sub_categoryModel->sub_category_status = $request->sub_category_status;
        $sub_categoryModel->category_id = $request->category_id;
        if($request->sub_category_order) {
            $sub_categoryModel->sub_category_order = $request->sub_category_order;
        }
        $sub_categoryModel->save();

        return redirect()->route('subcategory.list')->with('success','Sub Category has been Updated successfully!');
    }
}
