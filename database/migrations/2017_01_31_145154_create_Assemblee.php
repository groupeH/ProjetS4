<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssemblee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Assemblee', function (Blueprint $table) {
            $table->increments('id_Asmb');
            $table->string('titreAsmb', 100);
            $table->date('dateAsmb');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->boolean('AssembleePrivee');
            $table->float('coutParticipation');
            $table->integer('id_Responsable');
            $table->integer('id_Membre');
            $table->integer('id_Utilisateur');
            $table->integer('id_Adresse');
        });

        Schema::table('Assemblee', function (Blueprint $table) {



            $table->foreign('id_Responsable')->references('id_Responsable')->on('Responsable');

            $table->foreign('id_Membre')->references('id_Membre')->on('Responsable');

            $table->foreign('id_Membre')->references('id_Membre')->on('Responsable');

            $table->foreign('id_Adresse')->references('id_Adresse')->on('Adresse');
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
