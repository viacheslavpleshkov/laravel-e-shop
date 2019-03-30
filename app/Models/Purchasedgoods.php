<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchasedgoods extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'purchasedgoods';

	/**
	 * @var array
	 */
    protected $fillable = [
    	'user_id',
		'product_id'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
