<?php

namespace App\Http\Controllers;

use App\User;
use App\Brand;
use App\Buyer;
use App\Product;
use App\Upazila;
use App\Category;
use App\District;
use App\Division;
use App\Location;
use App\Supplier;
use App\LocationType;
use App\ThemeSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
            $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
            $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
            $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_dark']=ThemeSetting::where('key',"NAV_DARK")->get()->first()->status;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;


        // recent users
        $data['users']=User::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->get()->take(4);
        //Total categories
        $data['totalcategories']=count(Category::all());

        //Categories
        $data['categories']=Category::all()->take(5);

        //buyers
        $data['buyers']=Buyer::all()->take(4);
        $data['totalbuyer']=count(Buyer::all());
        $data['latestBuyer']=Buyer::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        //Brands
        $data['totalbrand']=count(Brand::all());
        $data['latestbrand']=Brand::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        

        //Suppliers
        $data['totalsupplier']=count(Supplier::all());
        $data['latestsupplier']=Supplier::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $data['supplierOpeningBalance']=Supplier::get()->sum('supplier_opening_balance');
        $data['averageSupplierOpeningBalance']=round(Supplier::get()->avg('supplier_opening_balance'),1);

        //Locations
        $data['division']=count(Division::all());
        $data['district']=count(District::all());
        $data['area']=count(Upazila::all());

        // Total and new Product
        $data['products']=Product::all()->take(4);
        $data['newProducts']=Product::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $data['totalProducts']=count(Product::all());
        $data['totalRetailPrice']=Product::get()->sum('product_retail_price');
        $data['averageRetailPrice']=round(Product::get()->avg('product_retail_price'),1);
   
            
        return view('dashboard.dashboard',$data);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
