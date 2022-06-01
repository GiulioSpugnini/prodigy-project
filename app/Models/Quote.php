<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'amount', 'discount',
    ];
    public function customers()
    {
        return $this->belongsToMany('App\Models\Customer');
    }
}
