<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('Responsable', function (Blueprint $table) {
            $table->increments('id_Responsable');
            $table->string('titreResponsable', 100);
            $table->integer('id_Membre');
            $table->increments('id_Utilisateur');
        });

        Schema::table('Responsable', function (Blueprint $table) {
            $table->primary(array('id_Responsable','id_Membre','id_Utilisateur'));




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
