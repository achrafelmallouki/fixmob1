<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTyperepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typereps', function (Blueprint $table) {
            $table->bigIncrements('id_typerep');
            $table->string('type_typerep');
            $table->string('prix_typerep');

            $table->string('genre_mobile');
            $table->string('marque_mobile'); 
            $table->string('type_mobile');

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
        Schema::dropIfExists('typereps');
    }
}
