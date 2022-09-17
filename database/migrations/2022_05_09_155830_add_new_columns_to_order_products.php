<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToOrderProducts extends Migration
{
    public function up()
    {
        Schema::table('order_products', function (Blueprint $table)
        {
            if(Schema::hasColumn('order_products', 'sku')){
                $table->dropColumn('sku');
            }
            $table->unsignedInteger('color_id')->after('product_id');
            $table->decimal('discount_number', 9, 2)->after('price');
            $table->decimal('subtotal_amount', 9, 2)->after('quantity');

        });
    }

    public function down()
    {
        Schema::table('order_products', function (Blueprint $table)
        {
            $table->dropColumn('color_id');
            $table->dropColumn('discount_number');
        });
    }
}
