<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCurriculaTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('course_curriculums', static function (Blueprint $table)
        {
            $table->increments('id');
//            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('course_curriculums');
    }
}
