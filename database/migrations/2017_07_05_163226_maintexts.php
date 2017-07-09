<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('maintexts',function($t){
			$t->increments('id');
			$t->string('name',60);
			$t->string('url');
			$t->enum('showhide',array('show','hide'))->default('show');
			$t->enum('lang',array('fr','eng'))->default('fr');
			$t->text('body');
			$t->timestamps();//add time of created row and time of editing row
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       schema::drop('maintexts');
    }
}
