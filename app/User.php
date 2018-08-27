<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['firstname', 'lastname', 'number', 'email', 'password', 'role_id'];

    protected $hidden = ['password', 'remember_token'];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
