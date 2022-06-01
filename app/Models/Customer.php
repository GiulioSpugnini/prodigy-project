<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'phone_number', 'photos', 'annotations'
    ];
    public function emails()
    {
        return $this->hasMany('App\Models\Email');
    }
    public function calls()
    {
        return $this->hasMany('App\Models\Call');
    }
    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }
    public function quotes()
    {
        return $this->hasMany('App\Models\Quote');
    }
}
