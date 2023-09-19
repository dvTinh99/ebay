<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->boolean('use_default')->default(0);
            $table->string('name')->nullable();
            $table->string('owner')->nullable();
            $table->string('number')->nullable();
            $table->string('dinh_tuyen')->nullable();
            $table->boolean('use_usdt')->default(0);
            $table->string('link_usdt')->nullable();
            $table->string('address_usdt')->nullable();
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
        Schema::dropIfExists('banks');
    }
}
