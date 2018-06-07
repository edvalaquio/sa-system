<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;


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
}
