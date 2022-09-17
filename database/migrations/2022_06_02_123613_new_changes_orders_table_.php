<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewChangesOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            if (Schema::hasColumn('orders', 'user_id')) {
                $table->dropColumn('user_id');
            }
            if (Schema::hasColumn('orders', 'total_discount_number')) {
                $table->dropColumn('total_discount_number');
            }
            if (Schema::hasColumn('orders', 'total_price')) {
                $table->dropColumn('total_price');
            }
            if (Schema::hasColumn('orders', 'credit_month_id')) {
                $table->dropColumn('credit_month_id');
            }
            if (Schema::hasColumn('orders', 'district_id')) {
                $table->dropColumn('district_id');
            }
            if (Schema::hasColumn('orders', 'installment_card_month_id')) {
                $table->dropColumn('installment_card_month_id');
            }
            $table->string('firstname')->after('more_info');
            $table->string('lastname')->after('firstname');
            $table->string('phone')->after('lastname');
            $table->string('email')->nullable()->after('phone');

        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {});
    }
}