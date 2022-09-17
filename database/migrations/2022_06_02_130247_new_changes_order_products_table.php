<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewChangesOrderProductsTable extends Migration
{
    public function up()
    {
        Schema::table('order_products', function (Blueprint $table)
        {});
    }
  
    public function down()
    {
        Schema::table('order_products', function (Blueprint $table)
        {
            if (Schema::hasColumn('order_products', 'color_id')) {
                $table->dropColumn('color_id');
            }
            if (Schema::hasColumn('order_products', 'discount_number')) {
                $table->dropColumn('discount_number');
            }
            $table->text('text')->nullable();

        });
    }
}