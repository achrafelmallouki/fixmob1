<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessoires', function (Blueprint $table) {
            $table->Increments('id_accessoire');
            $table->string('nom_accessoire'); 
            $table->string('prix_accessoire'); 
            $table->string('ancienprix_accessoire'); 
            $table->text('description_accessoire');
            $table->string('reference_accessoire');
            $table->string('photo_accessoire');
            
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
        Schema::dropIfExists('accessoires');
    }
}
