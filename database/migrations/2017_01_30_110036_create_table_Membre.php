<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Membre', function(Blueprint $table){
            $table->increments('id_Membre');
            $table->integer('id_Utilisateur');
            $table ->integer('id_TypeMembre');
            $table ->integer('id_Cotisation');




        });
        Schema::table('Cotisation', function(Blueprint $table) {
            $table->primary(array('id_Membre','id_Utilisateur'));
            $table->foreign('id_TypeMembre')->references('id_TypeMembre')->on('TypeMembre')
                ->onDelete('restrict')
                ->onUpdate('restrict');

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
