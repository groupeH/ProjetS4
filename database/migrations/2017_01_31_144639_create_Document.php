<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocument extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Document', function(Blueprint $table){
        $table->increments('id_Doc');
        $table->string('url',150);
        $table->float('taille');
        $table->date('dateParution');
        $table->integer('id_Responsable');
        $table->integer('id_Membre');
        $table->integer('id_Utilisateur');
    });

Schema::table('Document', function(Blueprint $table) {



    $table->foreign('id_Responsable')->references('id_Responsable')->on('Responsable');

    $table->foreign('id_Membre')->references('id_Membre')->on('Responsable');

    $table->foreign('id_Membre')->references('id_Membre')->on('Responsable');

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
