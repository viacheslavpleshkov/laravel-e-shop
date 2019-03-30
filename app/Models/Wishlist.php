<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'wishlists';

	/**
	 * @var array
	 */
	protected $fillable = [
		'product_id',
		'user_id'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
