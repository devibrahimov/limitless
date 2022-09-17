<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenderToUserInfosTable extends Migration
{
    public function up()
    {
        Schema::table('user_infos', function (Blueprint $table)
        {
            $table->enum('gender', ['m', 'w'])->nullable()->after('birthdate');
        });
    }

    public function down()
    {
        Schema::table('user_infos', function (Blueprint $table)
        {
            $table->dropColumn('gender');
        });
    }
}
