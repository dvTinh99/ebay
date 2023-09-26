<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('role')->default('seller');
            $table->float('wallet')->default(0);
            $table->boolean('approve')->default(0);
            $table->string('cccd_front')->nullable();
            $table->string('cccd_back')->nullable();
            $table->string('giay_phep_kinh_doanh')->nullable();
            $table->unsignedInteger('ref_of')->nullable();
            $table->string('ref_link')->default(self::quickRandom());
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }

    public static function quickRandom($length = 5)
    {
        $pool = '0123456789';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
}
