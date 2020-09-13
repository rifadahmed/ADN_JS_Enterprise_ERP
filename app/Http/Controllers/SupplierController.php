<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request ){
        $data['title'] = "List Of Suppliers";
        $suppliers = New Supplier();

        /** Search with status */
        if ($request->status == 'Active') {
            $suppliers = $suppliers->where('supplier_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $suppliers = $suppliers->where('supplier_status', 'Inactive');
        }
        /** Search with name */
        if (isset($request->search)) {
            $suppliers = $suppliers->where(function ($query) use ($request) {
                $query->where('supplier_name', 'like', '%' . $request->search . '%');
            });
        }

        $suppliers = $suppliers->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $suppliers       = $suppliers->appends($render);
        }


        $data['suppliers'] = $suppliers;
        $data['serial']     = managePagination($suppliers);

        return view('suppliers.index', $data);
    }

    public function show($id){
        $data['title'] = "Supplier Details";
        $data['supplier']=Supplier::find($id);
        return view('suppliers.show', $data);
    }
}
