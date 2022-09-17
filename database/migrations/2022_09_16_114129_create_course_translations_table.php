<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('course_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('course_id')->unsigned()->nullable();
            $table->string('locale', 2);
            $table->string('title', 255);
            $table->string('content', 255);
            $table->unique(['course_id', 'locale']);

            $table->index('course_id');
            $table->index('locale');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_translations');
    }
}