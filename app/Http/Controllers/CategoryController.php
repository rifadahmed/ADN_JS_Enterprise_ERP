<?php

namespace App\Http\Controllers;

use App\Category;
use App\ThemeSetting;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /***
     * List Category
     */
    public function index(Request $request)
    {
    
        $data['title'] = "List Of Categories";

        $categories = New Category();

        /** Search with status */
        if ($request->status == 'Active') {
            $categories = $categories->where('category_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $categories = $categories->where('category_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $categories = $categories->where(function ($query) use ($request) {
                $query->where('category_name', 'like', '%' . $request->search . '%');
            });
        }

        $categories = $categories->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $categories       = $categories->appends($render);
        }


        $data['categories'] = $categories;
        $data['serial']     = managePagination($categories);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('categories.index',$data);
    }

    /***
     * Show Category
     */
    public function show($id){
        $data['title'] = "Category Details";
        $data['data'] = Category::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('categories.show', $data);
    }

    /***
     * Create Category
     */
    public function create(){
        $data['title'] = "Create Category";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('categories.create', $data);
    }

    /***
     * Store Category
     */
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories|regex:/^[\pL\s\-]+$/u',
            'category_status' => 'required',
            'category_order' => 'nullable|integer',

        ]);
        //dd($request->all());

        $categoryModel = new Category();
        $categoryModel->category_name = $request->category_name;
        $categoryModel->category_status = $request->category_status;
        if($request->category_order) {
            $categoryModel->category_order = $request->category_order;
        }
        $categoryModel->save();

        return redirect()->route('category.create')->with('success','Category has been created successfully!');
    }

    /***
     * Edit Category
     */
    public function edit($id){
        $data['title'] = "Edit Category";
        $data['data'] = Category::where('id',$id)->first();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('categories.edit', $data);
    }

    /***
     * Update Category
     */
    public function update(Request $request,$id){

        $request->validate([
            'category_name' => 'regex:/^[\pL\s\-]+$/u|unique:categories,category_name,'.$id ,
            'category_status' => 'required',
            'category_order' => 'nullable|integer',
        ]);

        $categoryModel = Category::find($id);
        $categoryModel->category_name = $request->category_name;
        $categoryModel->category_status = $request->category_status;
        if($request->category_order) {
            $categoryModel->category_order = $request->category_order;
        }
        $categoryModel->save();

        return redirect()->route('category.edit',$id)->with('success','Category has been Updated successfully!');
    }

    /***
     * Trash Category
     */
    public function trash($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('category.index')->with('success','Category trashed successfully');
    }

    /***
     * Restore Category
     */
    public function restore($id)
    {
        Category::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Category has been restored successfully');
    }

    /***
     * Delete Category Permanently
     */
    public function destroy($id)
    {
        try {
            Category::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Category has been deleted successfully');
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
