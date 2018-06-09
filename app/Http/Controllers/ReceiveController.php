<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiveController extends Controller
{
    public function index(){
        return view('received');
    }
}
