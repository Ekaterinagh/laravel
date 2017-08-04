<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Piercing extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'piercing';
    
    protected $fillable = [
          'name',
          'body',
          'picture',
          'price'
    ];
    

    public static function boot()
    {
        parent::boot();

        Piercing::observe(new UserActionsObserver);
    }
    
    
    
    
}