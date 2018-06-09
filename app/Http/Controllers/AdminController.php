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
      return view('home');
    }

    public function addStaff(){
      return view('admin.addStaff');
    }
    // function for creating staff under an admin
    public function createUser(Request $request){
        $type = "staff";
        if($request->type == 'admin'){
            $type = "admin";
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->admin,
            'gender' => $request->gender,
            'type' => $type,
            'password' => Hash::make($request->password),
        ]);
        if($type == "admin"){
            Admin::create([
                'user_id' => $user->id,
                'group' => $request->group,
            ]);
        }elseif ($type == "staff") {
            Staff::create([
                'user_id' => $user->id,
                'admin_id' => $request->adminid,
            ]);
        }
    }

    public function removeStaff($userid){
        $user = User::findOrFail($userid);
        $user->status = "deleted";
        $user->save();
        return true;
    }


}
