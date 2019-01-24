<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'types';

	/**
	 * @var array
	 */
    protected $fillable = ['name'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
