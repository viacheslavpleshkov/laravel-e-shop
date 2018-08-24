<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'images', 'description', 'type_id', 'category_id', 'price', 'sale', 'new', 'trend', 'color', 'url', 'brand_id', 'made_id', 'information', 'specifications', 'user_id', 'status'];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function made()
    {
        return $this->belongsTo('App\Made');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
