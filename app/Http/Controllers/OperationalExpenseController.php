<?php

namespace App\Http\Controllers;

use App\ThemeSetting;
use App\OperationalExpense;
use Illuminate\Http\Request;
use App\OperationalExpenseType;

class OperationalExpenseController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Operational Expense Type";
        $expenses = New OperationalExpense();

        /** Search with status */
        if ($request->status == 'Active') {
            $expenses = $expenses->where('operational_expense_status', 'Active');
        } else if ($request->status == 'Inactive') {
            $expenses = $expenses->where('operational_expense_status', 'Inactive');
        }
         /** Search with name */
         if (isset($request->search)) {
            $expenses = $expenses->where(function ($query) use ($request) {
                $query->where('operational_expense_name', 'like', '%' . $request->search . '%');
            });
        }
        $expenses = $expenses->orderBy('id', 'DESC')->paginate(10);

        if (isset($request->search) || $request->status) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $expenses       = $expenses->appends($render);
        }


        $data['expenses'] = $expenses;
        $data['serial']     = managePagination($expenses);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.index', $data);
    }
    public function show($id){
        $data['title'] = "Operational Expense Details";
        $data['operational_expense']=OperationalExpense::findOrFail($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.show', $data);
    }
    public function create(){
        $data['title'] = "Create Operational Expense";
        $data['operational_expense_types'] = OperationalExpenseType::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'operational_expense_name' => 'required|unique:operational_expenses',
            'operational_expense_status' => 'required',
            'operational_expense_order' => 'nullable|integer',
            'operational_expense_type_id'=>'required',
        ]);
        //dd($request->all());

        $expense_Model = new OperationalExpense();
        $expense_Model->operational_expense_name = $request->operational_expense_name;
        $expense_Model->operational_expense_type_id = $request->operational_expense_type_id;
        $expense_Model->operational_expense_status = $request->operational_expense_status;
        if($request->operational_expense_order) {
            $expense_Model->operational_expense_order = $request->operational_expense_order;
        }
        
        $expense_Model->save();
        return redirect()->route('expense.create')->with('success','Expense has been created successfully!');
        //return $request->all();
    }
    public function edit($id){
        $data['title'] = "Edit SubCategory";
        $data['data'] = OperationalExpense::findOrFail($id);
        $data['operational_expense_types'] = OperationalExpenseType::all();
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('operationalExpenses.edit', $data);
    }
    
 


    public function update(Request $request,$id){

        $request->validate([
            'operational_expense_name' => 'required|unique:operational_expenses,operational_expense_name,'.$id,
            'operational_expense_status' => 'required',
            'operational_expense_order' => 'nullable|integer',
            'operational_expense_type_id'=>'required',
        ]);

        $expense_Model =OperationalExpense::find($id);
        $expense_Model->operational_expense_name = $request->operational_expense_name;
        $expense_Model->operational_expense_type_id = $request->operational_expense_type_id;
        $expense_Model->operational_expense_status = $request->operational_expense_status;
        if($request->operational_expense_order) {
            $expense_Model->operational_expense_order = $request->operational_expense_order;
        }
        
        $expense_Model->save();
        return redirect()->route('expense.edit',$id)->with('success','Expense has been updated successfully!');

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
