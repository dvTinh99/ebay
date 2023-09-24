<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('address_id')->nullable();
            $table->string('status')->nullable();
            $table->string('time_create')->nullable();
            $table->string('time_signing')->nullable();
            $table->float('price')->nullable();
            $table->string('payment')->nullable();
            $table->text('note')->nullable();
            $table->float('tax')->nullable();
            $table->float('warehouse_price')->nullable();
            $table->float('profit')->nullable();
            $table->float('shipping')->nullable();
            $table->float('coupon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
