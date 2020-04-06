<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->Increments('id_mobile');
            $table->string('genre_mobile')->nullable();  //soit téléphhone ou tablette 
            $table->string('marque_mobile')->nullable(); //Samsung or Oppo or apple 
            $table->string('type_mobile')->nullable();  //s10, S11, S9...etc
            $table->string('photo_type')->nullable();
            $table->datetime('deleted_at')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobiles');
    }
}
