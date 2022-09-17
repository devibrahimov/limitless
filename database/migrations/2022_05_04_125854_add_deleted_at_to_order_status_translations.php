<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToOrderStatusTranslations extends Migration
{
    public function up()
    {
        Schema::table('order_status_translations', function (Blueprint $table)
        {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('order_status_translations', function (Blueprint $table)
        {});
    }
}
