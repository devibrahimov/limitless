<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStatusTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('order_status_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('order_status_id');
            $table->string('name', 20);
            $table->string('locale', 2)->index();
            $table->unique(['order_status_id', 'locale']);
//            $table->foreign('order_status_id')->references('id')->on('order_statuses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_status_translations');
    }
}