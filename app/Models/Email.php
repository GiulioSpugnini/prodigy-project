<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'title', 'text', 'date_time'
    ];
    public function customers()
    {
        return $this->belongsToMany('App\Models\Customer');
    }
}
