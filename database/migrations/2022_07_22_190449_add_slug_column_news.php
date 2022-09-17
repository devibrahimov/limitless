<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnNews extends Migration
{
    public function up()
    {
        Schema::table('news_translation', function (Blueprint $table)
        {
            $table->string('slug', 255)->unique()->nullable();
            $table->unique(['locale', 'slug']);
        });
    }

    public function down()
    {
        Schema::table('news_translation', function (Blueprint $table)
        {});
    }
}
