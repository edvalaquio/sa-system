<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Staff;
use App\User;

class AdminController extends Controller
{
// will handle the initial landing page for admin user
    public function index(){
      return view('admin.home');
    }

    public function addStaff(){
      return view('admin.addStaff');
    }

    public function createStaff(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->admin,
            'type' => 'staff',
            'password' => Hash::make($request->password),
        ]);
        Staff::create([
            'user_id' => $request->userid,
            'admin_id' => $request->adminid,
        ]);
    }


}
