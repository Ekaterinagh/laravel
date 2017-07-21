<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
  public function messages(){
	  return $this->hasMany('\app\Contact'); //not nesessary salon_id, id 
	  
  }
}
