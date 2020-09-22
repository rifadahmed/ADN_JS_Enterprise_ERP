<?php

namespace App\Http\Controllers;

use App\User;
use App\Brand;
use App\Buyer;
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

        //Locations
        // $data['totallocation']=count(Location::all());
        // $data['latestlocation']=Location::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        //Suppliers
        $data['totalsupplier']=count(Supplier::all());
        $data['latestsupplier']=Supplier::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        // $data['totalOpeningBalance']=Supplier::sum('supplier_opening_balance');

        //Locations
        // $data['division']=count(Location::where('location_type_id',LocationType::where("location_type_name","Division")->first()->id)->get());
        // $data['district']=count(Location::where('location_type_id',LocationType::where("location_type_name","district")->first()->id)->get());
        // $data['area']=count(Location::where('location_type_id',LocationType::where("location_type_name","area")->first()->id)->get());
           $data['division']=count(Division::all());
           $data['district']=count(District::all());
           $data['area']=count(Upazila::all());

            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
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
