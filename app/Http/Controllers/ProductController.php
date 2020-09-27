<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Category;
use App\SubCategory;
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
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['products']=Product::all();
        return view('products.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Product";
            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
            $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
            $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
            $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['categories']=Category::all();
        $data['subCategories']=SubCategory::all();
        $data['data']=Product::find($id);
        $data['brands']=Brand::all();

        return view('products.edit', $data);
    }
    public function show($id){
        $data['title'] = "Product Details";
            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
            $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
            $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
            $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['product']=Product::find($id);
        
        return view('products.show', $data);
    }
    public function create(){
        $data['title'] = "Create Product";
            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
            $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
            $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
            $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['categories']=Category::all();
        $data['subCategories']=SubCategory::all();
        $data['brands']=Brand::all();
        return view('products.create', $data);
    }

    public function store(Request $request){

        $request->validate([
            'product_name' => 'required|unique:products',
            'product_category_id' => 'required',
            'product_sub_category_id' => 'required',
            'product_brand_id' => 'required',
            'product_sku' => 'required',
            'product_retail_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'product_wholesale_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'product_description' => 'required',
            'product_status' => 'required',

        ]);
        $productModel = new product();
        $productModel->product_name = $request->product_name;
        $productModel->product_category_id = $request->product_category_id;
        $productModel->product_sub_category_id= $request->product_sub_category_id;
        $productModel->product_brand_id  =  $request->product_brand_id ;
        $productModel->product_sku = $request->product_sku;
        $productModel->product_retail_price = $request->product_retail_price;
        $productModel->product_wholesale_price = $request->product_wholesale_price;
        $productModel->product_description = $request->product_description;
        $productModel->product_status = $request->product_status;

        $productModel->save();

        return redirect()->route('product.create')->with('success','Product has been created successfully!');
    }

    public function update(Request $request,$id){

        $request->validate([
            'product_name' => 'required|unique:products,product_name,'.$id,
            'product_category_id' => 'required',
            'product_sub_category_id' => 'required',
            'product_brand_id' => 'required',
            'product_sku' => 'required',
            'product_retail_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'product_wholesale_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'product_description' => 'required',
            'product_status' => 'required',

        ]);
        $productModel = product::find($id);
        $productModel->product_name = $request->product_name;
        $productModel->product_category_id = $request->product_category_id;
        $productModel->product_sub_category_id= $request->product_sub_category_id;
        $productModel->product_brand_id  =  $request->product_brand_id ;
        $productModel->product_sku = $request->product_sku;
        $productModel->product_retail_price = $request->product_retail_price;
        $productModel->product_wholesale_price = $request->product_wholesale_price;
        $productModel->product_description = $request->product_description;
        $productModel->product_status = $request->product_status;

        $productModel->save();

        return redirect()->route('product.edit',$id)->with('success','Product has been Updated successfully!');
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

    
        // *****************************Sub category AJAX Call *****************************
        public function subcategoryAjaxcall(Request $request){
            $cat_id = $request->cat_id;
            $subcategories = SubCategory::where('category_id',$cat_id)->get();
            
            return view('products._ajax_subcategory',compact('subcategories'));

    }
}
