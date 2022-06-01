<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'customer_id', 'phone_number', 'date_time', 'call_duration'
    ];
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
