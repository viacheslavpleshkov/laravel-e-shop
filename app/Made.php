<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Made extends Model
{
    protected $fillable = ['name', 'status'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
