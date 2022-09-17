<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserInfo extends Migration
{
    public function up()
    {
        Schema::table('user_info', function (Blueprint $table)
        {
            if (Schema::hasColumn('user_info', 'phone')) {
                $table->dropColumn('phone');
            }
        });
    }

    public function down()
    {
        Schema::table('user_info', function (Blueprint $table)
        {});
    }
}
