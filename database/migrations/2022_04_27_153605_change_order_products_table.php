<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOrderProductsTable extends Migration
{
    public function up()
    {
        Schema::table('order_products', function (Blueprint $table)
        {
            if (!Schema::hasColumn('order_products', 'name')) {
                $table->string('name',150)->nullable();
            }
            if (!Schema::hasColumn('order_products', 'price')) {
                $table->decimal('price',9,2)->unsigned();
            }

            if (!Schema::hasColumn('order_products', 'discount_price')) {
                $table->decimal('discount_price',9,2)->unsigned()->nullable();
            }

            if (!Schema::hasColumn('order_products', 'sku')) {
                $table->string('sku',30)->nullable();
            }

            if (!Schema::hasColumn('order_products', 'quantity')) {
                $table->integer('quantity')->unsigned()->default(1);
            }

            $table->softDeletes();


        });
    }

    public function down()
    {
        Schema::table('order_products', function (Blueprint $table)
        {
            $table->dropColumn([
                'name',
                'price',
                'discount_price',
                'sku',
                'quantity',
            ]);
        });
    }
}
