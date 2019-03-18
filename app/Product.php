<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'size',
        'photo_id',
        'category_id'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
