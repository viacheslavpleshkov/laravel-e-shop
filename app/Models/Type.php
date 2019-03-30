<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'types';

	/**
	 * @var array
	 */
    protected $fillable = [
    	'name'
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
