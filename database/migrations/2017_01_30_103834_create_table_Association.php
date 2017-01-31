<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAssociation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Association', function (Blueprint $table) {
            $table->increments('id_Assos');
            $table->string('nomAssos', 300);
            $table->string('mailAssos', 100);
            $table->integer('telephoneAssos');
            $table->string('description', 100);
            $table->string('pays', 100);
            $table->string('info_suplementaire', 500);
            $table->integer('id_Adresse');


        });
        Schema::table('Association', function(Blueprint $table) {

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
