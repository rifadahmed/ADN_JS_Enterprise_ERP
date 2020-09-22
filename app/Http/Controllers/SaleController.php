<?php

namespace App\Http\Controllers;

use App\ThemeSetting;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        $data['title'] = "List Of Sales";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('sales.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Sale";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('sales.edit', $data);
    }
    public function show(){
        $data['title'] = "Sale Details";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('sales.show', $data);
    }
    public function create(){
        $data['title'] = "Create Sale";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;

        return view('sales.create', $data);
    }
    /***
     * Trash Sale
     */
    public function trash($id)
    {
        Sale::findOrFail($id)->delete();
        return redirect()->route('sale.index')->with('success','Sale trashed successfully');
    }

    /***
     * Restore Sale
     */
    public function restore($id)
    {
        Sale::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Sale has been restored successfully');
    }

    /***
     * Delete Sale Permanently
     */
    public function destroy($id)
    {
        try {
            Sale::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Sale has been deleted successfully');
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
