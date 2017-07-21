<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable=[
		'name',
		'email',
		'subject',
		'message',
		'salon_id',
		'types'
	];
	public function salons(){
		return $this->belongsTo('\App\Salon');
	}
}
