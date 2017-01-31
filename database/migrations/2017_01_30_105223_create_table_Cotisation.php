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
            $table->date('dateAdhesion',50);
            $table ->date('dateFin',100);
            $table ->increments('id_TypeMembre');




        });
        Schema::table('Cotisation', function(Blueprint $table) {
            $table->primary('id_Corisation')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
