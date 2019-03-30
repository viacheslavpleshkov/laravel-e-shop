<?php

namespace App\Models;

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
	protected $fillable = [
		'name',
		'url',
		'men',
		'women',
		'kids',
		'accessories',
		'status'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function products()
	{
		return $this->hasMany(Product::class);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeStatus($query)
	{
		return $query->where('status', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeMen($query)
	{
		return $query->where('men', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeWomen($query)
	{
		return $query->where('women', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeKids($query)
	{
		return $query->where('kids', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeAccessories($query)
	{
		return $query->where('accessories', 1);
	}

	/**
	 * @param $query
	 * @param $url
	 * @return mixed
	 */
	public function scopeFindUrl($query, $url)
	{
		return $query->where('url', $url);
	}
}
