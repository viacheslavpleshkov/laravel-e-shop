<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = ['faq', 'men', 'women', 'kids', 'accessories', 'brands'];
}
