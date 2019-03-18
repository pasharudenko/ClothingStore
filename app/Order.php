<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'delivered'
    ];

    public function OrderItems()
    {
        return $this->belongsToMany('App\Product')->withPivot('qty','total');
    }
}
