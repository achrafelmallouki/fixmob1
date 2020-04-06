<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaccessoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daccessoires', function (Blueprint $table) {
            
            $table->Increments('id_daccessoire');
           
            $table->text('reference_daccessoire'); 
            $table->string('cin_client'); 
            $table->string('email_client'); 
            $table->string('tel_client')->nullable(); 

            $table->string('commentaire');
            
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
        Schema::dropIfExists('daccessoires');
    }
}
