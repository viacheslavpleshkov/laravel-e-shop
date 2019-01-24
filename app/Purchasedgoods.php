<?php

namespace App;

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
    protected $fillable = ['user_id', 'product_id'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
