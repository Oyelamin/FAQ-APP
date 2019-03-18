<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $guarded=[];
    public function problem(){

        return $this->belongsTo(Problem::class);

    }

    public function solutions(){

        return $this->belongsTo(Solution::class);
        
    }
}
