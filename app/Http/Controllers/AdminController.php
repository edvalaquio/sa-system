<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
// will handle the initial landing page for admin user
    public function index(){
      return view('admin.home');
    }

    public function staff(){
      return view('admin.addStaff');
    }


}
