<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use App\User;


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

    public function testFunction(){
        $path = 'MP1CV.pdf';
        $content = Storage::get('MP1CV.pdf');
        if (Storage::exists('MP1CV.pdf')) {
            return response()->file(storage_path("app/".$path));
            // return Storage::download($path)
            return "True";
        }
        return "False";
        $pdf = Storage::get('MP1 CV.pdf');
    }
    public function home(){
      return view('home');
    }

    public function addFirstUser(){
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin',
            'username' => 'admin',
            'gender' => 'male',
            'type' => 'admin',
            'password' => Hash::make('admin1'),
        ]);
        Auth::login($user, true);
        return redirect('/');

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
