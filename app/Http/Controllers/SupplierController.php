<?php

namespace App\Http\Controllers;

use App\Division;
use App\Location;
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

    public function create(){
        $data['title'] = "Add New Supplier";
        $data['divisions'] = Division::all();
        return view('suppliers.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_name' => 'required|unique:suppliers',
            'supplier_company' => 'required',
            'supplier_address' => 'required',
            'supplier_opening_balance' => 'required',
            'supplier_division_id' => 'required',
            'supplier_district_id' => 'required',
            'supplier_area_id' => 'required',
            'supplier_phone' => 'required',
            'supplier_email' => 'required',
        ]);

        $supplierModel = new Supplier();
        $supplierModel->supplier_name = $request->supplier_name;
        $supplierModel->supplier_company = $request->supplier_company;
        $supplierModel->supplier_address = $request->supplier_address;
        $supplierModel->supplier_opening_balance =  $request->supplier_opening_balance;
        $supplierModel->supplier_division_id = $request->supplier_division_id;
        $supplierModel->supplier_district_id = $request->supplier_district_id;
        $supplierModel->supplier_area_id = $request->supplier_area_id;
        $supplierModel->supplier_phone = $request->supplier_phone;
        $supplierModel->supplier_email = $request->supplier_email;
        $supplierModel->supplier_status = $request->supplier_status;

        $supplierModel->save();

        return redirect()->route('supplier.create')->with('success','Supplier has been created successfully!');
    }
    
    public function edit($id)
    {
        $data['title'] = "Edit Supplier";
        $data['data']=Supplier::find($id);
        $data['divisions'] = Division::all();
        
         return view('suppliers.edit', $data);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'supplier_name' => 'unique:suppliers,supplier_name,'.$id,
            'supplier_company' => 'required',
            'supplier_address' => 'required',
            'supplier_opening_balance' => 'required',
            'supplier_division_id' => 'required',
            'supplier_district_id' => 'required',
            'supplier_area_id' => 'required',
            'supplier_phone' => 'required',
            'supplier_email' => 'required',


        ]);
        $supplierModel = Supplier::find($id);
        $supplierModel->supplier_name = $request->supplier_name;
        $supplierModel->supplier_company = $request->supplier_company;
        $supplierModel->supplier_address = $request->supplier_address;
        $supplierModel->supplier_opening_balance =  $request->supplier_opening_balance;
        $supplierModel->supplier_division_id = $request->supplier_division_id;
        $supplierModel->supplier_district_id = $request->supplier_district_id;
        $supplierModel->supplier_area_id = $request->supplier_area_id;
        $supplierModel->supplier_phone = $request->supplier_phone;
        $supplierModel->supplier_email = $request->supplier_email;
        $supplierModel->supplier_status = $request->supplier_status;

        $supplierModel->save();

        return redirect()->route('supplier.edit',$id)->with('success','Supplier has been updated successfully!');
    }
}
