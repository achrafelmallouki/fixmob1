<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparations', function (Blueprint $table) {
            
            $table->Increments('id_reparation');
            $table->string('type_reparation'); 
            $table->string('date_reparation'); 
            $table->string('prix_reparation'); 
            $table->boolean('etat_reparation')->default('0'); 
            $table->string('time_reparation'); 

            $table->string('cin_client'); 
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
        Schema::dropIfExists('reparations');
    }
}
