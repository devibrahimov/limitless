<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsFilteredToOptionGroups extends Migration
{
    public function up()
    {
        Schema::table('option_groups', function (Blueprint $table)
        {
            if (!Schema::hasColumn('option_groups', 'is_filtered')) {
                $table->enum('is_filtered',['1','0'])->after('order')->default('1');
            }

        });
    }

    public function down()
    {
        Schema::table('option_groups', function (Blueprint $table)
        {
            $table->dropColumn('is_filtered');
        });
    }
}
