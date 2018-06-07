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

    public function home(){
      return view('home');
    }

    public function sent(){
      return view('sent');
    }

    public function received(){
      return view('received');
    }

    public function accounts(){
      return view('accounts');
    }

    public function transaction(){
      return view('transaction');
    }
}
