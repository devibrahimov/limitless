<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormsTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('contact_forms', static function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('subject', 255);
            $table->string('email', 255);
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
}
