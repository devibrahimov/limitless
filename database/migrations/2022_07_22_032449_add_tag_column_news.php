<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagColumnNews extends Migration
{
    public function up()
    {
        Schema::table('news_translation', function (Blueprint $table)
        {
            $table->longText('tags')->nullable();
        });
    }

    public function down()
    {
        Schema::table('news_translation', function (Blueprint $table)
        {});
    }
}
