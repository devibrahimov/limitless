<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('video_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('video_id')->unsigned()->nullable();
            $table->string('locale', 2);
            $table->string('title1', 255)->nullable();
            $table->string('title2', 255)->nullable();
            $table->longText('content')->nullable();
            $table->unique(['video_id', 'locale']);

            $table->index('video_id');
            $table->index('locale');

            $table->foreign('video_id')
                ->references('id')
                ->on('videos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('video_translations');
    }
}