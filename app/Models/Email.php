<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function customers()
    {
        return $this->belongsToMany('App\Models\Customer');
    }
}
