<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('page_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('page_id');
            $table->string('locale', 2)->index();
            $table->string('name')->nullable();
            $table->string('slug', 255)->unique()->nullable();
            $table->string('page_title', 255)->nullable();
            $table->string('title', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('keywords', 100)->nullable();
            $table->text('text')->nullable();
            $table->unique(['page_id', 'locale']);
            $table->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_translations');
    }
}
