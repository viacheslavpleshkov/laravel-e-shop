<?php

namespace App;

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
	protected $fillable = ['faq', 'men', 'women', 'kids', 'accessories', 'brands'];
}
