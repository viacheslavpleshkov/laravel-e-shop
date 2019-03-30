<?php

namespace App\Models;

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
    protected $fillable = [
    	'name',
		'number',
		'email',
		'password',
		'role_id'
	];

	/**
	 * @var array
	 */
    protected $hidden = [
    	'password',
		'remember_token'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function purchasedgoods()
    {
        return $this->hasMany(Purchasedgoods::class);
    }
}
