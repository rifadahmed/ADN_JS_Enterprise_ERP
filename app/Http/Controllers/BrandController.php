<?php

namespace App\Http\Controllers;

use App\Brand;
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

        return view('brands.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Brand";
        $data['data'] =Brand::findOrFail($id);
        return view('brands.edit', $data);
    }
    public function show($id){
        $data['title'] = "Brand Details";
        $data['brand'] =Brand::findOrFail($id);
        return view('brands.show', $data);
    }
    public function create(){
        $data['title'] = "Create Brand";
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
            'brand_name' => 'required|unique:brands',
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
}
