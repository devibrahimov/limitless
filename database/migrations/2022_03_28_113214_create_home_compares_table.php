<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeComparesTable extends Migration
{
    public function up()
    {
        Schema::create('home_compares', function (Blueprint $table)
        {
            $table->increments('id');
            $table->enum('status', [1, 0])->default(1);
            $table->unsignedInteger('order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home_compares');
    }
}
