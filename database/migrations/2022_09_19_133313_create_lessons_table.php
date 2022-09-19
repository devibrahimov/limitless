<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->decimal('lectures')->nullable();
            $table->string('image', 255)->nullable();
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}