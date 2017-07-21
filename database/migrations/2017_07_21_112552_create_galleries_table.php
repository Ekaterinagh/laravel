<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateGalleriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('galleries',function(Blueprint $table){
            $table->increments("id");
            $table->string("picture")->nullable();
            $table->integer("artists_id")->references("id")->on("artists")->nullable();
            $table->integer("services_id")->references("id")->on("services")->nullable();
            $table->string("name")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('galleries');
    }

}