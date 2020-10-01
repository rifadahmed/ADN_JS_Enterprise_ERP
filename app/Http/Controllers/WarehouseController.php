<?php

namespace App\Http\Controllers;

use App\Warehouse;
use App\ThemeSetting;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Warehouses";

        $warehouses = New Warehouse();

        /** Search with status */
        if ($request->status == 'Active') {
            $warehouses = $warehouses->where('warehouse_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $warehouses = $warehouses->where('warehouse_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $warehouses = $warehouses->where(function ($query) use ($request) {
                $query->where('warehouse_name', 'like', '%' . $request->search . '%');
            });
        }
        $warehouses = $warehouses->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $warehouses       = $warehouses->appends($render);
        }
        $data['warehouses'] = $warehouses;
        $data['serial']     = managePagination($warehouses);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        

        return view('warehouses.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Warehouse";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['data']=Warehouse::find($id);
        return view('warehouses.edit', $data);
    }
    public function show($id){
        $data['title'] = "Warehouse Details";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['warehouse']=Warehouse::find($id);
        return view('warehouses.show', $data);
    }
    public function create(){
        $data['title'] = "Create Warehouse";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('warehouses.create', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'warehouse_name' => 'required|unique:warehouses',
            'warehouse_status' => 'required',
            
          
        ]);
        $warehouseModel=New Warehouse;
        $warehouseModel->warehouse_name=$request->warehouse_name;
        $warehouseModel->warehouse_order=$request->warehouse_order;
        $warehouseModel->warehouse_status=$request->warehouse_status;
        $warehouseModel->save();
        return redirect()->route('warehouse.create')->with('success','Warehouse has been added successfully!');



    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'warehouse_name' => 'unique:warehouses,warehouse_name,'.$id,
            'warehouse_status' => 'required',
        ]);
        $warehouseModel=Warehouse::find($id);
        $warehouseModel->warehouse_name=$request->warehouse_name;
        $warehouseModel->warehouse_order=$request->warehouse_order;
        $warehouseModel->warehouse_status=$request->warehouse_status;
        $warehouseModel->save();
        return redirect()->route('warehouse.edit',$id)->with('success','Warehouse has been updated successfully!');

    }
    /***
     * Trash Warehouse
     */
    public function trash($id)
    {
        Warehouse::findOrFail($id)->delete();
        return redirect()->route('Warehouse.index')->with('success','Warehouse trashed successfully');
    }

    /***
     * Restore Warehouse
     */
    public function restore($id)
    {
        Warehouse::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Warehouse has been restored successfully');
    }

    /***
     * Delete Warehouse Permanently
     */
    public function destroy($id)
    {
        try {
            Warehouse::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Warehouse has been deleted successfully');
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
