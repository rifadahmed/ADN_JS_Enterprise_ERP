<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(){
        $data['title'] = "List Of Purchases";
        return view('purchases.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit Purchase";
        return view('purchases.edit', $data);
    }
    public function show(){
        $data['title'] = "Purchase Details";
        return view('purchases.show', $data);
    }
    public function create(){
        $data['title'] = "Create Purchase";
        return view('purchases.create', $data);
    }
    
    /***
     * Trash Purchase
     */
    public function trash($id)
    {
        Purchase::findOrFail($id)->delete();
        return redirect()->route('purchase.index')->with('success','Purchase trashed successfully');
    }

    /***
     * Restore Purchase
     */
    public function restore($id)
    {
        Purchase::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','Purchase has been restored successfully');
    }

    /***
     * Delete Purchase Permanently
     */
    public function destroy($id)
    {
        try {
            Purchase::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','Purchase has been deleted successfully');
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
