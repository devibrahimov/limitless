<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToPaymentMethods extends Migration
{
    public function up()
    {
        Schema::table('payment_methods', function (Blueprint $table)
        {
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('payment_methods', function (Blueprint $table)
        {});
    }
}
