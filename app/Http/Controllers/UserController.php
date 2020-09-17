<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['title'] = "List Of User";
        $data['users']=User::all();
        return view('users.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit User";
        $data['data']=User::find($id);
        return view('users.edit', $data);
    }
    public function show($id){
        $data['title'] = "User Details";
        $data['user']=User::find($id);
        return view('users.show', $data);
    }
    public function create(){
        $data['title'] = "Create User";
        return view('users.create', $data);
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',

        ]);

        $userModel = new User ;
        $userModel->name = $request->name;
        $userModel->email = $request->email;
        $userModel->password=$request->password;

        $userModel->save();
        return redirect()->route('user.create')->with('success','User has been Added successfully!');
    }

    public function update(Request $request,$id){
        
        
        $request->validate([
            'name' => 'unique:users,name,'.$id,
            'email' => 'required',
            'password' => 'required',

        ]);

        $userModel =User::find($id);
        $userModel->name = $request->name;
        $userModel->email = $request->email;
        $userModel->password=$request->password;

        $userModel->save();
        return redirect()->route('user.edit',$id)->with('success','User has been Updated successfully!');
    }

    /***
     * Trash User
     */
    public function trash($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index')->with('success','User trashed successfully');
    }

    /***
     * Restore User
     */
    public function restore($id)
    {
        User::withTrashed()->where('id', $id)->first()->restore();
        return redirect()->back()->with('success','User has been restored successfully');
    }

    /***
     * Delete User Permanently
     */
    public function destroy($id)
    {
        try {
            User::where('id', $id)->withTrashed()->forceDelete();
            return redirect()->back()->with('success','User has been deleted successfully');
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
