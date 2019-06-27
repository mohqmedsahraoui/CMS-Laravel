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
            $table->bigIncrements('id');
<<<<<<< HEAD:database/migrations/2019_05_29_140719_create_participants_table.php
            $table->string('Nom', 200)->nullable();
            $table->text('Role')->nullable();
            
=======
            $table->string('Nom');
>>>>>>> 214a5594b79c35426c6af5c03551ea4152caa680:database/migrations/2019_06_25_193051_create_participants_table.php
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
