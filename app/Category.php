<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * @var array
	 */
    protected $fillable = ['name', 'url', 'men', 'women', 'kids', 'accessories', 'status'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
