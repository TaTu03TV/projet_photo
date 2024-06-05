<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;


class Sessions extends Model
{
	protected $table = 'sessions';
	protected $primaryKey = 'id';
	public $timestamps = false;

	protected $fillable = [
		'session_date',
		'location',
		'description',
		'photographer_id',
		'client_id'
	];

	public function photographer()
	{
		return $this->belongsTo(Photographers::class, 'photographer_id');
	}

	public function client()
	{
		return $this->belongsTo(Clients::class, 'client_id');
	}
}