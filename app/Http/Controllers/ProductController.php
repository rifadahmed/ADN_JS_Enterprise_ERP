<?php

namespace App\Http\Controllers;

use App\Product;
use App\ThemeSetting;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Products";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('products.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Product";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('products.edit', $data);
    }
    public function show(){
        $data['title'] = "Product Details";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('products.show', $data);
    }
    public function create(){
        $data['title'] = "Create Product";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_selection']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        return view('products.create', $data);
    }
     /***
     * Trash Product
     */
    public function trash($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index')->with('success','Product trashed successfully');
    }

    /***
     * Restore Product
     */
    public function restore($id)
    {
        Product::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Product has been restored successfully');
    }

    /***
     * Delete Product Permanently
     */
    public function destroy($id)
    {
        try {
            Product::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Product has been deleted successfully');
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
