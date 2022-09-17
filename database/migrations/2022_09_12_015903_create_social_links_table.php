<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLinksTable extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('social_links', static function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('url', 255);
            $table->string('icon', 255);
            $table->boolean('status')->default(true);
            $table->morphs('socialable');
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
}
