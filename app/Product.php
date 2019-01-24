<?php

namespace App;

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
    protected $fillable = ['name', 'images', 'description', 'type_id', 'category_id', 'price', 'sale', 'new', 'trend', 'color', 'url', 'brand_id', 'made_id', 'information', 'specifications', 'user_id', 'status'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function type()
    {
        return $this->belongsTo('App\Type');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function made()
    {
        return $this->belongsTo('App\Made');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user()
    {
        return $this->belongsTo('App\User');
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
