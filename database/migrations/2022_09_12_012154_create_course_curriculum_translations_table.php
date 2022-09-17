<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCurriculumTranslationsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('course_curriculum_translations', static function (Blueprint $table)
        {
            $table->increments('id');
//            $table->foreignId('course_curriculum_id')
//                ->constrained('course_curriculums')
//                ->onDelete('cascade');
            $table->string('locale', 2);
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('course_curriculum_translations');
    }
}
