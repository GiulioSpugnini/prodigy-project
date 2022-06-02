<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'title', 'customer_id', 'name', 'text'
    ];
    public function customers()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
