<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnProjetId2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('superviseurs', function (Blueprint $table) {
            $table->bigInteger('projet_id')->unsigned();
<<<<<<< HEAD:database/migrations/2019_05_29_141550_add_column_projet_id2.php
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');;
        });
=======
            $table->foreign('projet_id')->references('id')->on('projets');
        });    
        
>>>>>>> 214a5594b79c35426c6af5c03551ea4152caa680:database/migrations/2019_06_25_191315_add_column_projet_id2.php
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('superviseurs', function (Blueprint $table) {
            $table->dropColumn('projet_id');
        });
    }
}
