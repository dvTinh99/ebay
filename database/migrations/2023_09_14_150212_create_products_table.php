<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->string('don_vi')->nullable();
            $table->integer('so_luong_mua_toi_thieu')->nullable();
            $table->string('tag')->nullable();
            $table->string('ma_vach')->nullable();
            $table->boolean('returnable')->default(0);
            $table->float('price')->default(0);
            $table->float('warehouse_price')->default(0);
            $table->float('profit')->default(0);
            $table->float('price_discount')->default(0);
            $table->string('price_discount_type')->nullable();
            $table->string('price_discount_from')->nullable();
            $table->string('price_discount_to')->nullable();
            $table->integer('dinh_luong')->nullable();
            $table->string('sku')->nullable();
            $table->string('out_site_link')->nullable();
            $table->string('text_link')->nullable();
            $table->text('description')->nullable();
            $table->float('time_ship')->nullable();
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
        Schema::dropIfExists('products');
    }
}
