<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['title'] = "List Of User";
        return view('users.index', $data);
    }
    public function edit(){
        $data['title'] = "Edit User";
        return view('users.edit', $data);
    }
    public function show(){
        $data['title'] = "User Details";
        return view('users.show', $data);
    }
    public function create(){
        $data['title'] = "Create User";
        return view('users.create', $data);
    }
}
