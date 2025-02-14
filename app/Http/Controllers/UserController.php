<?php

namespace App\Http\Controllers;

use App\User;
use App\ThemeSetting;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $data['title'] = "List Of Users";


            $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
            $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
            $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
            $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
            $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
            $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
            $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;


            $users = New User();

            /** Search with status */
            if ($request->status == 'Active') {
                $suppliers = $users->where('status', 'Active');
            } else if ($request->status == 'Inactive') {
                $users = $users->where('status', 'Inactive');
            }
            /** Search with name */
            if (isset($request->search)) {
                $users = $users->where(function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                });
            }
    
            $users = $users->orderBy('id', 'DESC')->paginate(10);
    
            if (isset($request->search) || $request->status) {
                $render['status'] = $request->status;
                $render['search'] = $request->search;
                $users       = $users->appends($render);
            }
    
    
            $data['users'] = $users;
            $data['serial']     = managePagination($users);
        return view('users.index', $data);
    }
    public function edit($id){
        $data['title'] = "Edit User";
        $data['data']=User::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('users.edit', $data);
    }
    public function show($id){
        $data['title'] = "User Details";
        $data['user']=User::find($id);
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('users.show', $data);
    }
    public function create(){
        $data['title'] = "Create User";
        $data['menu_color']=ThemeSetting::where('key',"MENU_COLOR")->get()->first()->value;
        $data['menu_dark']=ThemeSetting::where('key',"MENU_DARK")->get()->first()->status;
        $data['menu_collapse']=ThemeSetting::where('key',"MENU_COLLAPSE")->get()->first()->status;
        $data['menu_selection']=ThemeSetting::where('key',"MENU_SELECTION")->get()->first()->value;
        $data['nav_color']=ThemeSetting::where('key',"NAV_COLOR")->get()->first()->value;
        $data['nav_fix']=ThemeSetting::where('key',"NAV_FIX")->get()->first()->status;
        $data['footer_fix']=ThemeSetting::where('key',"FOOTER_FIX")->get()->first()->status;
        return view('users.create', $data);
    }
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
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

   
}
