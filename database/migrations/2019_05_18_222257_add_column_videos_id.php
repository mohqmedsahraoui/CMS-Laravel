<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnVideosId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->Biginteger('video_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->dropForeign(['video_id']);
            $table->dropColumn('video_id'); 
        });
    }
}
