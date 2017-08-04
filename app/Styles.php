<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Styles extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'styles';
    
    protected $fillable = [
          'name',
          'body',
          'picture',
          'min_price'
    ];
    

    public static function boot()
    {
        parent::boot();

        Styles::observe(new UserActionsObserver);
    }
    
    
    
    
}