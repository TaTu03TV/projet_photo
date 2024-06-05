<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Photographers extends Model
{
	protected $table = 'photographers';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'firstname',
		'lastname',
		'bio',
		'email',
		'phone',
		'created_at',
		'updated_at',
		'img_link'
	];
}
