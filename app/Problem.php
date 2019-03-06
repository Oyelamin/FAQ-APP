<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function service(){

        return $this->belongsTo(Service::class);

    }
    
    public function descriptions(){
        return $this->hasMany(Description::class);
    }
}
