<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'services';
    
    protected $fillable = [
          'name',
          'description',
          'picture',
          'promotion'
    ];
    

    public static function boot()
    {
        parent::boot();

        Services::observe(new UserActionsObserver);
    }
    
    
    
    
}