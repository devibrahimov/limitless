<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelTranslationsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('level_translations', static function (Blueprint $table)
        {
            $table->increments('id');
//            $table->foreignId('level_id')
//                ->constrained('levels')
//                ->onDelete('cascade');
            $table->string('locale', 2);
            $table->string('name', 255);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('level_translations');
    }
}
