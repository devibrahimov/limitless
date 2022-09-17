<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToUsersInfosTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::table('user_infos', static function (Blueprint $table)
        {
            $table->longText('description')->nullable();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::table('user_infos', static function (Blueprint $table)
        {
            $table->dropColumn('description');
        });
    }
}
