<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
      if(Auth::check()){
        if(Auth::user()->type == "admin"){
          return redirect('/admin');
        }
      }else{
        return view('login');
      }
    }

    public function filelog(){
      return view('index');
    }

    public function logout(){
      Auth::logout();
      return redirect('/');
    }
}
