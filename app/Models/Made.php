<?php

namespace App\Models;

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
    protected $fillable = [
    	'name',
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
}
