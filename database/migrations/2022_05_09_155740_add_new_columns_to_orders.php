<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToOrders extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            $table->decimal('total_discount_number', 9, 2)->unsigned()->after('address')->comment('Ümumi endirimlərin cəmi');
            $table->decimal('total_price', 9, 2)->unsigned()->after('total_discount_number')->comment('Məhsulun endirimsiz qiymətinin cəmi');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            $table->dropColumn('total_discount_number');
            $table->dropColumn('total_price');
        });
    }
}
