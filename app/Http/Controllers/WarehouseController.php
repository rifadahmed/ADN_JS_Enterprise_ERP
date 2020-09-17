<?php

namespace App\Http\Controllers;

use App\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(){
        $data['title'] = "List Of Warehouses";
        return view('warehouses.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Warehouse";
        return view('warehouses.edit', $data);
    }
    public function show(){
        $data['title'] = "Warehouse Details";
        return view('warehouses.show', $data);
    }
    public function create(){
        $data['title'] = "Create Warehouse";
        return view('warehouses.create', $data);
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
