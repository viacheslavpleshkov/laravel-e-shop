<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'images', 'description', 'url', 'status'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
