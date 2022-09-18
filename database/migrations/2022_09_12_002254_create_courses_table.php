<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('courses', static function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->decimal('lectures')->nullable();
            $table->decimal('price')->nullable();
            $table->string('image', 255)->nullable();
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
}
