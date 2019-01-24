<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'brands';

	/**
	 * @var array
	 */
    protected $fillable = ['name', 'images', 'description', 'url', 'status'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
