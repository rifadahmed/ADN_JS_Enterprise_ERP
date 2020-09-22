<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\ThemeSetting;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of SubCategories";
        //$data['sub_categories']=SubCategory::orderBy('sub_category_name')->paginate(2);
        $sub_categories = New SubCategory();

        /** Search with status */
        if ($request->status == 'Active') {
            $sub_categories = $sub_categories->where('sub_category_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $sub_categories = $sub_categories->where('sub_category_status', 'Inactive');
        }
         /** Search with name */
         if (isset($request->search)) {
            $sub_categories = $sub_categories->where(function ($query) use ($request) {
                $query->where('sub_category_name', 'like', '%' . $request->search . '%');
            });
        }
        $sub_categories = $sub_categories->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $sub_categories       = $sub_categories->appends($render);
        }


        $data['sub_categories'] = $sub_categories;
        $data['serial']     = managePagination($sub_categories);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('categories.subcategories.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit SubCategory";
        $data['data'] = SubCategory::findOrFail($id);
        $data['categories'] = Category::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('categories.subcategories.edit', $data);
    }
    public function show($id){
        $data['title'] = "SubCategory Details";
        $data['sub_category']=SubCategory::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('categories.subcategories.show', $data);
    }
    public function create(){
        $data['title'] = "Create SubCategory";
        $data['categories'] = Category::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('categories.subcategories.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories,sub_category_name|regex:/^[\pL\s\-]+$/u' ,
            'sub_category_status' => 'required',
            'category_id' => 'required',
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
            'sub_category_name' => 'regex:/^[\pL\s\-]+$/u|unique:sub_categories,sub_category_name,'.$id ,
            'sub_category_status' => 'required',
            'category_id' => 'required',
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
        return redirect()->back()->with('success','Sub Category has been Updated successfully!');

    }
    /***
     * Trash SubCategory
     */
    public function trash($id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->route('subcategory.index')->with('success','SubCategory trashed successfully');
    }

    /***
     * Restore SubCategory
     */
    public function restore($id)
    {
        SubCategory::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','SubCategory has been restored successfully');
    }

    /***
     * Delete SubCategory Permanently
     */
    public function destroy($id)
    {
        try {
            SubCategory::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','SubCategory has been deleted successfully');
        } catch (\Exception $exception) {
            if ($exception->getCode() == 23000) {
                $status = 'warning';
                $alert = 'You can\'t delete this item because lot\'s of dependency exist on system';
            } else {
                $status = 'danger';
                $alert = $exception->getMessage();
            }
            return redirect()->back()->with($status,$alert);
        }
    }
}
