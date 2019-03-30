<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
	/**
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * @var string
	 */
	protected $table = 'helps';

	/**
	 * @var array
	 */
	protected $fillable = [
		'faq',
		'men',
		'women',
		'kids',
		'accessories',
		'brands'
	];

	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
}
