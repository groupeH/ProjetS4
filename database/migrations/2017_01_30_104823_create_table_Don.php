<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Don', function(Blueprint $table){
            $table->increments('id_Don');
            $table->date('dateDon');
            $table ->float('montantDon');
            $table ->string('id_Utilisateur',100);
            $table ->string('mail_utilisateur',100);
            $table ->integer('portable');
            $table ->string('civilité',100);
            $table ->string('photo',100);
            $table ->string('moyen_communication',100);
            $table ->date('date_naissance');
            $table ->date('date_inscription');
            $table ->integer('id_Adresse');
            $table ->integer('id_Assos');



        });
        Schema::table('Don', function(Blueprint $table) {

            $table->foreign('id_Utilisateur')->references('id_Utilisateur')->on('Utilisateur');
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
