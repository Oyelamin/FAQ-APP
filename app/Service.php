<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded= [];
    public function problems(){

        return $this->hasMany(Problem::class);

    }
}
