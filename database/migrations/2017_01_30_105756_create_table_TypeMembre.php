<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTypeMembre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TypeMembre', function(Blueprint $table){
            $table->increments('id_TypeMembre');
            $table->string('type',50);
            $table ->float('montantCotisation');
            $table ->integer('id_Cotisation');




        });
        Schema::table('TypeMembre', function(Blueprint $table) {

            $table->foreign('id_Cotisation')->references('id_Cotisation')->on('Cotisation');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
