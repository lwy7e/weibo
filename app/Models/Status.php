<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
