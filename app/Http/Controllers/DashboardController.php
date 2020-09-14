<?php

namespace App\Http\Controllers;

use App\User;
use App\Brand;
use App\Buyer;
use App\Location;
use App\Supplier;
use App\LocationType;
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
        $data['users']=User::all()->take(3);

        //buyers
        $data['buyers']=Buyer::all()->take(3);
        $data['totalbuyer']=count(Buyer::all());
        $data['latestBuyer']=Buyer::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        //Brands
        $data['totalbrand']=count(Brand::all());
        $data['latestbrand']=Brand::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        //Locations
        $data['totallocation']=count(Location::all());
        $data['latestlocation']=Location::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        //Suppliers
        $data['totalsupplier']=count(Supplier::all());
        $data['totalOpeningBalance']=Supplier::sum('supplier_opening_balance');

        //Division
        $data['division']=count(Location::where('location_type_id',LocationType::where("location_type_name","Division")->first()->id)->get());
        $data['district']=count(Location::where('location_type_id',LocationType::where("location_type_name","district")->first()->id)->get());
        $data['area']=count(Location::where('location_type_id',LocationType::where("location_type_name","area")->first()->id)->get());

        
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
