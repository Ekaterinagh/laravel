<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Salons extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'salons';
    
    protected $fillable = [
          'name',
          'address',
          'telephone',
          'email',
          'description'
    ];
    

    public static function boot()
    {
        parent::boot();

        Salons::observe(new UserActionsObserver);
    }
    public function messages()
    {
        return $this->hasMany('\app\Contacts'); //not nesessary salon_id, id
    }
    
    
}