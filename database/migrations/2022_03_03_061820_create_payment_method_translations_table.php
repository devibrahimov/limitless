<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('payment_method_translations', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('payment_method_id');
            $table->string('name', 255);

            $table->string('locale', 2)->index();
            $table->unique(['payment_method_id', 'locale']);

            $table->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods')
                ->onUpdate('cascade'
                )->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_method_translations');
    }
}
