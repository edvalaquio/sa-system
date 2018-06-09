<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'comment', 'has_document', 'title', 'description',
    ];

    // public function user(){
    //
    // }

}
