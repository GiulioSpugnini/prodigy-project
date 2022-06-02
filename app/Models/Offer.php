<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'amount', 'customer_id', 'offer_duration',
    ];
    public function customers()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
