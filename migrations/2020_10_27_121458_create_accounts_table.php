<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',30)->unique()->comment('登录用户名');
            $table->string('password')->comment('登录密码');
            $table->unsignedInteger('login_num')->default(0)->comment('登录次数');
            $table->timestamp('last_login_time')->nullable()->comment('上次登陆时间');
            $table->timestamp('login_time')->nullable()->comment('本次登陆时间');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
}
