<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCotisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
               Schema::create('Cotisation', function(Blueprint $table){
            $table->increments('id_Cotisation');
            $table->date('dateAdhesion');
            $table ->date('dateFin');
            $table ->integer('id_TypeMembre');




        });
        Schema::table('Cotisation', function(Blueprint $table) {

            $table->foreign('id_TypeMembre')->references('id_TypeMembre')->on('TypeMembre');
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
