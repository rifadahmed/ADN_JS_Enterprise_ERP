<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /***
     * List Category
     */
    public function index(){

        $data['title'] = "List Of Categories";
        $data['categories'] = Category::orderBy('category_name')->paginate(2);
        return view('categories.index',$data);

        // $title = "List Of Categories";
        // $categories=Category::orderBy('category_name')->paginate(15);
        // return view('categories.index',compact('title','categories'));
    }

    /***
     * Create Category
     */
    public function create(){
        $data['title'] = "Create Category";
        return view('categories.create', $data);
    }

    /***
     * Store Category
     */
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_status' => 'required',
<<<<<<< HEAD
            'category_order' => 'integer',
=======
             'category_order' => 'nullable|integer',
>>>>>>> ddaeae2b96d946f8e590d788c5cb0c47c6b7fc7e
        ]);
        //dd($request->all());

        $categoryModel = new Category();
        $categoryModel->category_name = $request->category_name;
        $categoryModel->category_status = $request->category_status;
        if($request->category_order) {
            $categoryModel->category_order = $request->category_order;
        }
        $categoryModel->save();

        return redirect()->route('category.list')->with('success','Category has been created successfully!');
    }

    /***
     * Edit Category
     */
    public function edit($id){
        $data['title'] = "Edit Category";
        $data['data'] = Category::where('id',$id)->first();
        return view('categories.edit', $data);
    }

    /***
     * Update Category
     */
    public function update(Request $request,$id){

        $request->validate([
<<<<<<< HEAD
            'category_name' => 'required|unique:categories,category_name,'.$id,
            'category_status' => 'required',
            'category_order' => 'integer',
=======
            
            'category_name' => 'unique:categories,category_name,'.$id ,
            'category_status' => 'required',
            'category_order' => 'nullable|integer',
>>>>>>> ddaeae2b96d946f8e590d788c5cb0c47c6b7fc7e
        ]);

        $categoryModel = Category::find($id);
        $categoryModel->category_name = $request->category_name;
        $categoryModel->category_status = $request->category_status;
        if($request->category_order) {
            $categoryModel->category_order = $request->category_order;
        }
        $categoryModel->save();

        return redirect()->route('category.list')->with('success','Category has been Updated successfully!');
    }

    /***
     * Show Category
     */
    public function show($id){
        $title = "Category Details";
        $data=Category::findOrFail($id);
        return view('categories.show', compact('title','data'));
    }

}
