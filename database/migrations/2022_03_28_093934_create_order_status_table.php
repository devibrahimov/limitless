<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStatusTable extends Migration
{
    public function up()
    {
        Schema::create('order_status', function (Blueprint $table)
        {
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('status_id');
//            $table->foreign('order_id')
//                ->references('id')
//                ->on('orders')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');
//
//            $table->foreign('status_id')
//                ->references('id')
//                ->on('order_statuses')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_status');
    }
}
