<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('lesson_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('lesson_id')->unsigned()->nullable();
            $table->string('locale', 2);
            $table->string('title', 255);
            $table->string('content', 255);
            $table->unique(['lesson_id', 'locale']);

            $table->index('lesson_id');
            $table->index('locale');

            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lesson_translations');
    }
}
