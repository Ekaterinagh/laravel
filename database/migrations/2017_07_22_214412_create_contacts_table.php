<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateContactsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('contacts',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->string("email");
            $table->string("subject")->nullable();
            $table->text("message")->nullable();
            $table->integer("salons_id")->references("id")->on("salons");
            $table->string("types")->nullable();
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
        Schema::drop('contacts');
    }

}