<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            // Silinəcək olan sütunlar

            if (Schema::hasColumn('orders', 'product_id')) {
                $table->dropColumn('product_id');
            }

            if (Schema::hasColumn('orders', 'qty')) {
                $table->dropColumn('qty');
            }

            if (Schema::hasColumn('orders', 'status')) {
                $table->dropColumn('status');
            }

            // Nullable olacaq sütunlar

            $table->integer('order_id')->nullable()->index()->change();
            $table->string('session_id', 100)->nullable()->change();

            // Foreign key əlavə ediləcək olan sütunlar

            $table->unsignedBigInteger('user_id')->nullable()->index()->change();

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('set null')
            //     ->onUpdate('cascade');

            $table->unsignedInteger('order_status_id')->nullable()->index()->change();

            $table->foreign('order_status_id')
                ->references('id')
                ->on('order_statuses')
                ->onDelete('set null')
                ->onUpdate('cascade');

            // Yeni əlavə ediləcək olan sütunlar

            if (!Schema::hasColumn('orders', 'more_info')) {
                $table->string('more_info')->nullable()->after('order_status_id');;
            }

            if (!Schema::hasColumn('orders', 'address')) {
                $table->text('address')->nullable()->after('more_info');;
            }

            if (!Schema::hasColumn('orders', 'total_amount')) {
                $table->decimal('total_amount', 9, 2)->unsigned()->after('address');
            }

            if (!Schema::hasColumn('orders', 'payment_method_id')) {
                $table->unsignedInteger('payment_method_id')->nullable()->index()->after('total_amount');
            }

            if (!Schema::hasColumn('orders', 'delivery_method_id')) {
                $table->unsignedInteger('delivery_method_id')->nullable()->index()->after('payment_method_id');
            }

            if (!Schema::hasColumn('orders', 'district_id')) {
                $table->unsignedInteger('district_id')->nullable()->index()->after('delivery_method_id');
            }

            if (!Schema::hasColumn('orders', 'installment_card_month_id')) {
                $table->unsignedInteger('installment_card_month_id')->nullable()->index()->after('district_id');
            }

            if (!Schema::hasColumn('orders', 'ip_address')) {
                $table->string('ip_address', 100)->nullable()->after('installment_card_month_id');
            }


            $table->foreign('payment_method_id')
                ->references('id')
                ->on('payment_methods')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('delivery_method_id')
                ->references('id')
                ->on('payment_methods')
                ->onDelete('set null')
                ->onUpdate('cascade');

            // $table->foreign('district_id')
            //     ->references('id')
            //     ->on('districts')
            //     ->onDelete('set null')
            //     ->onUpdate('cascade');

            // $table->foreign('installment_card_month_id', 'p_month_id')
            //     ->references('id')
            //     ->on('installment_card_months')
            //     ->onDelete('set null')
            //     ->onDelete('cascade');

            $table->softDeletes();


        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method_id',
                'delivery_method_id',
                'district_id',
                'installment_card_month_id',
                'total_amount',
                'more_info',
                'address',
            ]);
        });
    }
}
