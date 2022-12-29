<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideoTani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_tani', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreign('guruTani_id')->references('id')->on('guru_tani');
            $table->date('tanggalvid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_tani');
    }
}
