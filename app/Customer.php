<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable example (if we want to explicitly define all values. It is protected)
    //protected $fillable = ['cust_name','cust_email','status'] ;

    //guarded example (when nothing is protected and you don't have to explicitly explain all)
    protected $guarded = [];

    public function getActiveAttribute($key)
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
        ][$key];
    }

    public function scopeActive($query)
    {
        return $query->where('status',1);
    }
    public function scopeInActive($query)
    {
        return $query->where('status',0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
