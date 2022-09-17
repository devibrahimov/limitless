<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTranslationsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('team_translations', static function (Blueprint $table)
        {
            $table->increments('id');
//            $table->foreignId('team_id')
//                ->constrained('teams')
//                ->onDelete('cascade');
            $table->string('locale', 2);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('position', 255);
            $table->string('image', 255);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('team_translations');
    }
}
