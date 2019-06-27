<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperviseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2019_06_23_203758_create_table_participants2.php
        Schema::create('participants2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomsuper', 200)->nullable();
            $table->text('rolesuper')->nullable();
=======
        Schema::create('superviseurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom', 200)->nullable();
            $table->text('Role')->nullable();
>>>>>>> 214a5594b79c35426c6af5c03551ea4152caa680:database/migrations/2019_06_25_185613_create_superviseurs_table.php
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
        Schema::dropIfExists('superviseurs');
    }
}
