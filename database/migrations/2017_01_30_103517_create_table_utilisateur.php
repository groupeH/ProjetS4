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
            $table ->integer('portable')->nullable();
            $table ->string('civilité',100);
            $table ->string('photo',100);
            $table ->string('moyen_communication',100);
            $table ->date('date_naissance');
            $table ->date('date_inscription');
            $table ->integer('id_Adresse');
            $table ->integer('id_Assos');



        });
        Schema::table('Utilisateur', function(Blueprint $table) {

            $table->foreign('id_Adresse')->references('id_Adresse')->on('Adresse');

            $table->foreign('id_Assos')->references('id_Assos')->on('Association');

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
