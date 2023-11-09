<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserIdOfWithdawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            // $table->unsignedTinyInteger('user_id'); change to unsignedBigInteger
            $table->unsignedBigInteger('user_id')->index()->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            //
        });
    }
}
