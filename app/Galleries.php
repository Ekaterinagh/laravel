<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Galleries extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'galleries';
    
    protected $fillable = [
          'picture',
          'artists_id',
          'services_id',
          'name',
          'showhide'
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide", ];


    public static function boot()
    {
        parent::boot();

        Galleries::observe(new UserActionsObserver);
    }
    
    public function artists()
    {
        return $this->hasOne('App\Artists', 'id', 'artists_id');
    }


    public function services()
    {
        return $this->hasOne('App\Services', 'id', 'services_id');
    }


    
    
    
}