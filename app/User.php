<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * @var array
	 */
    protected $fillable = ['name', 'number', 'email', 'password', 'role_id'];

	/**
	 * @var array
	 */
    protected $hidden = ['password', 'remember_token'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function wishlist()
    {
        return $this->hasMany('App\Wishlist');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function purchasedgoods()
    {
        return $this->hasMany('App\Purchasedgoods');
    }
}
