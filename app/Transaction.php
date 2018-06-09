<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    $fillable = [
        'comment', 'has_document', 'title', 'description',
    ];

    // public function user(){
    //
    // }

}
