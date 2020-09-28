<?php

namespace App\Http\Controllers;

use App\ThemeSetting;
use Illuminate\Http\Request;
use App\OperationalExpenseType;

class OperationalExpenseTypeController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Operational Expense Type";
        $expense_types = New OperationalExpenseType();

        /** Search with status */
        if ($request->status == 'Active') {
            $expense_types = $expense_types->where('operational_expense_type_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $expense_types = $expense_types->where('operational_expense_type_status', 'Inactive');
        }
         /** Search with name */
         if (isset($request->search)) {
            $expense_types = $expense_types->where(function ($query) use ($request) {
                $query->where('operational_expense_type_name', 'like', '%' . $request->search . '%');
            });
        }
        $expense_types = $expense_types->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $expense_types       = $expense_types->appends($render);
        }


        $data['expense_types'] = $expense_types;
        $data['serial']     = managePagination($expense_types);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.operationalExpenseTypes.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit Expense Type";
        $data['data'] = OperationalExpenseType::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.operationalExpenseTypes.edit', $data);
    }
    public function show($id){
        $data['title'] = "Operational Expense Type Details";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        $data['operational_expense_type']=OperationalExpenseType::find($id);
        return view('operationalExpenses.operationalExpenseTypes.show', $data);
    }
    public function create(){
        $data['title'] = "Create Operational Expense Type";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.operationalExpenseTypes.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'operational_expense_type_name' => 'required|unique:operational_expense_types',
            'operational_expense_type_status' => 'required',
            'operational_expense_type_order' => 'nullable|integer',
        ]);
        //dd($request->all());

        $expense_typeModel = new OperationalExpenseType();
        $expense_typeModel->operational_expense_type_name = $request->operational_expense_type_name;
        $expense_typeModel->operational_expense_type_status = $request->operational_expense_type_status;
        if($request->operational_expense_type_order) {
            $expense_typeModel->operational_expense_type_order = $request->operational_expense_type_order;
        }
        
        $expense_typeModel->save();

        return redirect()->route('expense.type.create')->with('success','Expense Type has been created successfully!');
        //return $request->all();
    }

    public function update(Request $request,$id){

        $request->validate([
            'operational_expense_type_name' => 'required|unique:operational_expense_types,operational_expense_type_name,'.$id,
            'operational_expense_type_status' => 'required',
            'operational_expense_type_order' => 'nullable|integer',
        ]);


        $expense_typeModel =  OperationalExpenseType::find($id);
        $expense_typeModel->operational_expense_type_name = $request->operational_expense_type_name;
        $expense_typeModel->operational_expense_type_status = $request->operational_expense_type_status;
        if($request->operational_expense_type_order) {
            $expense_typeModel->operational_expense_type_order = $request->operational_expense_type_order;
        }
        
        $expense_typeModel->save();

        return redirect()->route('expense.type.edit',$id)->with('success','Expense Type has been updated successfully!');

    }
    /***
     * Trash SubCategory
     */
    public function trash($id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->route('subcategory.index')->with('success','SubCategory trashed successfully');
    }

    /***
     * Restore SubCategory
     */
    public function restore($id)
    {
        SubCategory::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','SubCategory has been restored successfully');
    }

    /***
     * Delete SubCategory Permanently
     */
    public function destroy($id)
    {
        try {
            SubCategory::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','SubCategory has been deleted successfully');
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
