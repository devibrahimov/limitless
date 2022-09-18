<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('levels', static function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('levels');
    }
}
