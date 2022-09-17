<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableNewsTranslation extends Migration
{
    public function up()
    {
        Schema::rename('news_translation', 'news_translations');
    }

    public function down()
    {}
}