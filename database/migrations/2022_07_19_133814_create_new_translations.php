<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTranslations extends Migration
{
    public function up()
    {
        Schema::create('news_translation', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('news_id')->unsigned()->nullable();
            $table->string('locale', 2);
            $table->string('title', 255)->nullable();
            $table->longText('content')->nullable();

            $table->unique(['news_id', 'locale']);

            $table->index('news_id');
            $table->index('locale');

            $table->foreign('news_id')
                ->references('id')
                ->on('news')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_translations');
    }
}
