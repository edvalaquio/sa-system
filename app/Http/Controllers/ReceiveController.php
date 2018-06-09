<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class ReceiveController extends Controller
{
    public function index(){
        return view('received');
    }

    public function createReceive(Request $request){
        $document = false;
        if ($request->hasFile('file')) {
            document = true;
        }
        $transaction = Transaction::create([
            'title' => $request->title,
            'has_documents' => $document,
            'comment' => $request->comment,
            'description' => $request->description
        ]);


    }
}
