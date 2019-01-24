<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Made extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'mades';

	/**
	 * @var array
	 */
    protected $fillable = ['name', 'status'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
