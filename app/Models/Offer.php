<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'amount', 'offer_duration',
    ];
    public function customers()
    {
        return $this->belongsToMany('App\Models\Customer');
    }
}
