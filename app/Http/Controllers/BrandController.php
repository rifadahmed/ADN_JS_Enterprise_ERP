<?php

namespace App\Http\Controllers;

use App\Brand;
use App\ThemeSetting;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Brands";
        $brands = New Brand();

        /** Search with status */
        if ($request->status == 'Active') {
            $brands = $brands->where('brand_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $brands = $brands->where('brand_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $brands = $brands->where(function ($query) use ($request) {
                $query->where('brand_name', 'like', '%' . $request->search . '%');
            });
        }

        $brands = $brands->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $brands       = $brands->appends($render);
        }


        $data['brands'] = $brands;
        $data['serial']     = managePagination($brands);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        return view('brands.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Brand";
        $data['data'] =Brand::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        return view('brands.edit', $data);
    }
    public function show($id){
        $data['title'] = "Brand Details";
        $data['brand'] =Brand::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        return view('brands.show', $data);
    }
    public function create(){
        $data['title'] = "Create Brand";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        return view('brands.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'brand_name' => 'required|unique:brands',
            'brand_status' => 'required',
            'brand_order' => 'nullable|integer',

        ]);
        $brandModel = new Brand();
        $brandModel->brand_name = $request->brand_name;
        $brandModel->brand_status = $request->brand_status;
        if($request->brand_order) {
            $brandModel->brand_order = $request->brand_order;
        }
        $brandModel->save();

        return redirect()->route('brand.create')->with('success','Brand has been created successfully!');
        
        //return view('brands.create', $data);
    }
    public function update(Request $request,$id){

        $request->validate([
            'brand_name' => 'unique:brands,brand_name,'.$id,
            'brand_status' => 'required',
            'brand_order' => 'nullable|integer',

        ]);
        $brandModel = Brand::findOrFail($id);
        $brandModel->brand_name = $request->brand_name;
        $brandModel->brand_status = $request->brand_status;
        if($request->brand_order) {
            $brandModel->brand_order = $request->brand_order;
        }
        $brandModel->save();

        return redirect()->route('brand.edit',$id)->with('success','Brand has been Updated successfully!');
    }


     /***
     * Trash Brand
     */
    public function trash($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()->route('brand.index')->with('success','Brand trashed successfully');
    }

    /***
     * Restore Brand
     */
    public function restore($id)
    {
        Brand::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Brand has been restored successfully');
    }

    /***
     * Delete Brand Permanently
     */
    public function destroy($id)
    {
        try {
            Brand::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Brand has been deleted successfully');
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
