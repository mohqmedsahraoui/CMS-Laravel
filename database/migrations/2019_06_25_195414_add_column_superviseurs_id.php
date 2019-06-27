<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnSuperviseursId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->bigInteger('superviseur_id')->unsigned();
            $table->foreign('superviseur_id')->references('id')->on('superviseurs');
        });

        Schema::table('participants', function (Blueprint $table) {
            $table->bigInteger('projet_id')->unsigned();
            $table->foreign('projet_id')->references('id')->on('projets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->dropColumn('superviseur_id');

        });

        Schema::table('participants', function (Blueprint $table) {
            $table->dropColumn('projet_id');

        });
    }
}
