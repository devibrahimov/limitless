<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeacherInfosTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('teacher_infos', static function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedBigInteger('teacher_id');
            $table->date('birthdate')->nullable();
            $table->string('image', 255)->nullable();
            $table->longText('description')->nullable();
            $table->text('experience')->nullable();
            $table->decimal('hourly_rate')->nullable();

//            $table->foreign('teacher_id')
//                ->references('id')
//                ->on('teachers')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_infos');
    }
}
