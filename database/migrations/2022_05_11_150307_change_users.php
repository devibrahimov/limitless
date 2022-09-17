<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone',20)->after('email')->index()->unique()->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->dropColumn('phone');
        });
    }
}
