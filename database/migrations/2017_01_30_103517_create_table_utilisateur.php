<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Utilisateur', function(Blueprint $table){
            $table->increments('id_Utilisateur');
            $table->string('login',50);
            $table ->string('mdp',100);
            $table ->string('nom_utilisateur',100);
            $table ->string('mail_utilisateur',100);
            $table ->integer('portable',25);
            $table ->string('civilité',100);
            $table ->string('photo',100);
            $table ->string('moyen_communication',100);
            $table ->date('date_naissance');
            $table ->date('date_inscription');
            $table ->increments('id_Adresse',100);
            $table ->increments('id_Assos');



        });
        Schema::table('Utilisateur', function(Blueprint $table) {
            $table->primary('id_Utilisateur')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_Assos')->references('id_Assos')->on('Association')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_Adresse')->references('id_Adresse')->on('Adresse')
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
