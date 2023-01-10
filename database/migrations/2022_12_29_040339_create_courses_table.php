<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('guruTani_id');
            $table->foreign('guruTani_id')->references('id')->on('gurutanis')->onDelete('cascade')->onUpdate('cascade');
            $table->string('skillLevel');
            $table->string('video');
            $table->string('thumbnail');
            $table->text('description');
            $table->float('rating')->nullable();
            $table->integer('price');
            $table->string('type');
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
        Schema::dropIfExists('video_tani');
    }
}