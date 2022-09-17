<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOrders extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            if (!Schema::hasColumn('orders', 'credit_month_id')) {
//                $table->unsignedInteger('credit_month_id')->nullable()->after('payment_method_id');
            
                // $table->foreign('credit_month_id')
                // ->references('id')
                // ->on('credits')
                // ->onUpdate('cascade')
                // ->onDelete('cascade');
            }

         

        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            $table->dropForeign(['credit_month_id']);
        });
    }
}
