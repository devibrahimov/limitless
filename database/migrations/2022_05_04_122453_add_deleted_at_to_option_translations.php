<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToOptionTranslations extends Migration
{
    public function up()
    {
        Schema::table('option_translations', function (Blueprint $table)
        {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('option_translations', function (Blueprint $table)
        {});
    }
}
