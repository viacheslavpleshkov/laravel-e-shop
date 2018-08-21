<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'delivery', 'tel', 'map', 'email', 'policytermsandconditions',
    ];
}
