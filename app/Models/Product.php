<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * @var array
	 */
	protected $fillable = [
		'name',
		'images',
		'description',
		'type_id',
		'category_id',
		'price',
		'sale',
		'new',
		'trend',
		'color',
		'url',
		'brand_id',
		'made_id',
		'information',
		'specifications',
		'user_id',
		'status'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function type()
	{
		return $this->belongsTo(Type::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function made()
	{
		return $this->belongsTo(Made::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
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
		return $query->where('type_id', 1);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeWomen($query)
	{
		return $query->where('type_id', 2);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeKids($query)
	{
		return $query->where('type_id', 3);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeAccessories($query)
	{
		return $query->where('type_id', 4);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeFindBrand($query, $id)
	{
		return $query->where('brand_id', $id);
	}

	/**
	 * @param $query
	 * @param $id
	 * @return mixed
	 */
	public function scopeFindCategory($query, $id)
	{
		return $query->where('category_id', $id);
	}

	/**
	 * @param $query
	 * @return mixed
	 */
	public function scopeDesc($query)
	{
		return $query->orderBy('id', 'desc');
	}
}
