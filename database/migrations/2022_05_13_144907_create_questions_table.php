<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->mediumtext('intitule');
            $table->string('reponse_a');
            $table->string('reponse_b');
            $table->string('reponse_c');
            $table->string('reponse_d');
            $table->char('bonne_reponse');
            $table->mediumtext('explication');
            $table->boolean('validee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
