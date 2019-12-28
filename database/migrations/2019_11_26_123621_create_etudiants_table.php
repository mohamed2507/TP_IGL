<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',40);
            $table->string('prenom',40);
            $table->date('dateN');
            $table->enum('sexe',['male','female']);
            $table->enum('promo',['1 CP','1 CS',]);
            $table->integer('matricule');
            $table->string('gmail',40);
            $table->string('section',40);
            $table->integer('groupe');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
