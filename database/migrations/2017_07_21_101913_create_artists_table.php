<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateArtistsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('artists',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->text("description")->nullable();
            $table->string("photo")->nullable();
            $table->string("salon_id");
            $table->string("contacts")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->string("status")->nullable();
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
        Schema::drop('artists');
    }

}