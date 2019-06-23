<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('nomsuper', 200)->nullable();
            $table->text('rolesuper')->nullable();
            $table->string('nomPP', 200)->nullable();
            $table->text('rolePP')->nullable();
            $table->string('nomSP', 200)->nullable();
            $table->text('roleSP')->nullable();
            $table->string('nomTP', 200)->nullable();
            $table->text('roleTP')->nullable();
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
        Schema::dropIfExists('participants');
    }
}
