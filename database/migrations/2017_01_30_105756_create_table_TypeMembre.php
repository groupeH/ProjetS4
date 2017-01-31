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
            $table ->float('montantCotisation',100);
            $table ->increments('id_Cotisation');




        });
        Schema::table('TypeMembre', function(Blueprint $table) {
            $table->primary('id_TypeMembre')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('id_Cotisation')->references('id_Cotisation')->on('Cotisation')
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
