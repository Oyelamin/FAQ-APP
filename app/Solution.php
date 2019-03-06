<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    public function description(){

        return $this->belongsTo(Description::class);

    }
}
