<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'amount', 'customer_id', 'discount',
    ];
    public function customers()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
