<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Transact extends Pivot
{
    protected $table = 'transact';
    protected $fillable = [
        'sender_id', 'receiver_id', 'transaction_id', 'note',
    ];

}
