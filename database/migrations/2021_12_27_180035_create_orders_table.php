<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('session_id', 100);
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->integer('order_status_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
